<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Category;
use App\Models\Investment;
use App\Models\Schadule;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
use ImageTrait;

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        $departments = Category::get();
        return  view("doctors.login", compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $doctor = Doctor::where('id', session('id'))->first();
        $departments = Category::get();
        $reservations = Investment::where('doctor_id', $doctor->id)->get(); 
        return view('doctors.dashboard', compact('doctor', 'departments', 'reservations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email',
            'category_id' => 'required',
            'gender' => 'required',
            'image'=> 'required',
            'password' => 'required|min:6',
        ]);
        $doctor =     Doctor::create($input);
        $token = uniqid(base64_encode(Str::random(40)));
        $doctor->token = $token;
        $doctor->password = Hash::make($request->password);
        if ($request->file("image")) {
            $image = $this->uploadImage($request->file('image'), "/upload/drivers");
            $doctor->image  = $image;
        }
        $doctor->save();
        $departments = Category::get();
        $reservations = Investment::where('doctor_id', $doctor->id)->get(); 
        toastr()->success('New account as Doctor created successfully');
        $session = session(['token' => $doctor->token, 'id' => $doctor->id]);
        return view('doctors.dashboard', compact('doctor', 'departments', 'reservations'));
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $doctor = Doctor::where('email', $email)->first(); // id= 1
        $departments = Category::get();
        $reservations = Investment::where('doctor_id', $doctor->id)->get(); //doctor-id = 1
        if ($doctor) {
            if (Hash::check($password, $doctor->password)) {
                $token = uniqid(base64_encode(Str::random(40)));
                $doctor->token = $token;
                $doctor->save();
                $session = session(['token' => $doctor->token, 'id' => $doctor->id]);
                toastr()->success('You are logged in successfully');
                return view('doctors.dashboard', compact('doctor', 'departments', 'reservations'));
            } else {
                toastr()->warning('The password is incorrect');
                return redirect()->back();
            }
        } else {
            toastr()->warning('This user does not have an account on the site, please create an account first');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        if (!$doctor) {
            return redirect()->route("drivers.index");
        } else {
            return  view("doctors.edit", compact("doctor"));
        }
    }

    public function update(Request $request , $id)
    {
        try {
            $doctor = Doctor::find($id);
            if ($doctor) {
                if ($request->file("image")) {
                    $image = $this->uploadImage($request->file('image'), "/upload/drivers");
                    $doctor->image  = $image;
                }
                $doctor->save();
                session()->flash('edit');
                return redirect()->back();
            }
        } catch (\Throwable $e) {
            session()->flash($e->getMessage());
            return redirect()->back();
        }
    }

    // public function edit($id)
    // {
    //     $category = Category::find($id);
    //     if (!$category) {
    //         return redirect()->route("drivers.index");
    //     } else {
    //         return  view("doctors.edit", compact("category"));
    //     }
    // }

    // public function update(Request $request , $id)
    // {
    //     try {
    //         $category = Category::find($id);
    //         if ($category) {
    //             if ($request->file("image")) {
    //                 $image = $this->uploadImage($request->file('image'), "/upload/categories");
    //                 $category->image  = $image;
    //             }
    //             $category->save();
    //             session()->flash('edit');
    //             return redirect()->back();
    //         }
    //     } catch (\Throwable $e) {
    //         session()->flash($e->getMessage());
    //         return redirect()->back();
    //     }
    // }
    public function editProfile($id)
    {
        $doctor = Doctor::find($id);
        $departments = Category::get();
        return view('doctors.profile', compact('doctor', 'departments'));
    }
    public function updateProfile(Request $request, $id)
    {
        try {
            $doctor = Doctor::find($id);
            $departments = Category::get();
            $reservations = Investment::where('doctor_id', $doctor->id)->get();
            $input = $request->all();
            $request->validate([
            'name' => 'required',
            'email' => 'required',
            'category_id' => 'required',
            ]);
            $doctor->update($input);
            if ($request->file("image")) {
                $image = $this->uploadImage($request->file('image'), "/upload/drivers");
                $doctor->image  = $image;
            }
            $doctor->save();
            $schedule = new Schadule();
            $schedule->doctor_id = $request->doctor_id;
            $schedule->week_day = $request->week_day;
            $schedule->time = $request->from + '-' + $request->to ;
            $request->save();
            toastr()->success('update profile successfully');
            return view('doctors.dashboard', compact('doctor', 'departments', 'reservations'));
        } catch (\Throwable $e) {
            toastr()->error('Something error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        $doctor = Doctor::where('token', session('token'))->first();
        if (session('token') !== null) {
            $doctor->token = null;
            $doctor->save();
            Session::forget('token');
            Session::flush();
            toastr()->success('Signed out successfully');
            return redirect()->route('home');
        }
    }
}
