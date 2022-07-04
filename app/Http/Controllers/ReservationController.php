<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\User;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reservation(Request $request)
    {
        $userId = session('user_id');
        $user = User::where('id', '=', $userId)->first();
        $input = $request->all();
        if ($user) {
            if (Investment::where('user_id', $userId)->where('doctor_id', $input['doctor_id'])->count() > 0) {
                        toastr()->warning('This doctor has been booked before');
                        return redirect()->back();
            } else {
                    $data =
                    [
                        'doctor_id' => $input['doctor_id'] ,
                        'user_id' => $userId,
                    ];
                    $save = Investment::create($data);
                    toastr()->success('The reservation has been submitted successfully');
                    return redirect()->back();
            }
        } else {
            return view('user.login');
        }
        
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
        //
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
