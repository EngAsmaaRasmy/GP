<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Category;
use App\Models\Investment;
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
        return  view("doctors.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'address' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $doctor =     Doctor::create($input);
        $token = uniqid(base64_encode(Str::random(40)));
        $doctor->token = $token;
        $doctor->password = Hash::make($request->password);
        $doctor->save();
        toastr()->success('New account as Doctor created successfully');
        $session = session(['token' => $doctor->token, 'id' => $doctor->id]);
        return redirect()->route('doctor.show.profile')->with('doctor', $doctor);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $doctor = Doctor::where('email', $email)->first();
        $departments = Category::get();
        $reservations = Investment::where('doctor_id', $doctor->id)->get();
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
    public function updateProfile(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email',
            'category_id' => 'required',
            'address' => 'required',
        ]);
        $doctor->update($input);
        toastr()->success('update profile successfully');
        return redirect()->route('doctor.main')->with('doctor', $doctor);
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
