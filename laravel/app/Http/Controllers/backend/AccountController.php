<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{

    public function login(Request $request) {
        if ($request->getMethod() == 'POST') {

            $cre = $request->email;
            $user = User::where('email', $cre)->first();
            /*Kiểm tra nếu đăng nhập thất bại sẽ chuyển về trang đăng nhập*/
            if(empty($user)|| !Hash::check($request->password, $user->password)) {
                return redirect()->route('backend.account.login')->with('errors', 'Đăng nhập thất bại');
            }

            /*Đăng nhập thành công*/
            Auth()->guard('backend')->login($user);
            return redirect()->route('backend.home.index')->with('status' ,'Đăng nhập thành công');
        }
        return view('backend.account.login');
    }
    public function logout(Request $request) {
        Auth::shouldUse('backend');
        if (Auth()->guard('backend')->user()->id) {
            Auth()->guard('backend')->logout();
        }
        return redirect()->route('backend.account.login')->with('status', 'Đăng xuất thành công');
    }
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
