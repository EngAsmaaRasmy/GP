<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeAnAppointmentRequest;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Investment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments  = Category::get();
        $departmentDoctors = Doctor::get();
        return view('home', compact('departments', 'departmentDoctors'));
    }

    public function fetchDoctors(Request $request)
    {
        $data['doctors']    = Doctor::where('category_id', $request->category_id)->get();
        return response()->json($data);
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
    public function store(MakeAnAppointmentRequest $request)
    {
        try {
            $appointment = Investment::create([
                "name" => $request->name,
                "phone" => $request->phone,
                "email" => $request->email,
                "category_id" => $request->category_id,
                "doctor_id" => $request->doctor_id,
                "message" => $request->message,
                "date" => $request->date,
            ]);
            toastr()->success('Your reservation has been sent successfully');
            return redirect()->back();
        } catch (\Throwable $e) {
            session()->flash($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
