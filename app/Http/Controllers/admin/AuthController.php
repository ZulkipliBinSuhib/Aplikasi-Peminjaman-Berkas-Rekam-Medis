<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
  public function pageLogin()
  {
    // Halaman Login
    return view('pageLogin');
  }
  public function ceklogin(REQUEST $request)
  {
      
    if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
    {
      // success
      return redirect()->route('home');
    }
    // Gagal
    return redirect()->back();
  }
  public function logoutLogin()
  {
    Auth::logout();
    return redirect()->route('login');
  }
  public function dashboard()
  {
    // Halaman Dahsboard
    return view('pageDashboard');
  }
}