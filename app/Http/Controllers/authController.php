<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class authController extends Controller
{
    /**
     * Show the form login for the given user.
     *
     *
     * @return View
     */
    public function index() {
        return view('auth.login.index');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function doLogin(Request $request) {
        $credentials = $request->only('username', 'password');

        $username = User::where('username', $request['username'])->first();
        if ($username == null) {
            return redirect()->back()->with('ERR', 'Username salah!');
        }elseif (!Auth::attempt($credentials)) {
            return redirect()->back()->with('ERR', 'Password salah!');
        }

        return redirect()->route('check-role');
    }

    /**
     * checking roles on the user.
     *
     *
     * @return Response
     */
    public function checkRole() {
        switch (Auth::user()->role) {
            case 'admin':
                return redirect()->route('dasboard.formMinat')->with('OK', 'Berhasil Login');
                break;
            default:
                return redirect('/');
                break;
        }
    }

    /**
     * Handle an authentication attempt for logout.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function doLogout(Request $request) {
        Auth::logout();
        return redirect()->route('login')->with('OK', 'Berhasil Logout');
    }
}
