<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'city' => 'required',
            'phone' => 'required|min:11',
            'gender' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user =     User::create($input);
        $token = uniqid(base64_encode(Str::random(40)));
        $user->token = $token;
        $user->password = Hash::make($request->password);
        $user->save();
        toastr()->success('New account as User created successfully');
        $session = session(['user_token' => $user->token, 'user_id' => $user->id]);
        return redirect()->route('user.show.profile')->with('user', $user);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                $token = uniqid(base64_encode(Str::random(40)));
                $user->token = $token;
                $user->save();
                $session = session(['user_token' => $user->token, 'user_id' => $user->id]);
                toastr()->success('You are logged in successfully');
                return redirect()->route('user.main')->with('user', $user);
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
        $user = User::find($id);
        $input = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'city' => 'required',
            'phone' => 'required|min:11',
            'gender' => 'required',
        ]);
        $user->update($input);
        toastr()->success('update profile successfully');
        return redirect()->route('user.main')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        $user = User::where('token', session('user_token'))->first();
        if (session('user_token') !== null) {
            $user->token = null;
            $user->save();
            Session::forget('token');
            Session::flush();
            toastr()->success('Signed out successfully');
            return redirect('/');
        }
    }
}
