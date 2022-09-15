<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class LogingController extends Controller
{
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    // Login Methods
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('security/login');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function check(LoginRequest $request)
    {
        if (
            Auth::attempt(
                ['email' => $request->email, 'password' => $request->password],
                $request->has('remember')
                    ? true
                    : false
            )
        ) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login.index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    // Forget Password Methods
    public function forgetPassword()
    {
        return view('security/forgetPassword');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forgetPasswordSend(Request $request)
    {
//        $request->validate(['email' => 'required|email']);
//
//        $status = Password::sendResetLink(
//            $request->only('email')
//        );
//
//        return $status === Password::RESET_LINK_SENT
//            ? back()->with(['status' => __($status)])
//            : back()->withErrors(['email' => __($status)]);

        return redirect()->route('login.index');
    }
}
