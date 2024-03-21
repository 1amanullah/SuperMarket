<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function checklogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        
        // dd($data);
        if(Auth::guard('admin')->attempt(['email' => $data['email'],'password' => $data['password']]))
        {
            return redirect('/')->with('success','Login successfully!!!');
        }
        else
        {
            return redirect()->back()->with('error','Email or Password is incorrect');
        }
    }

    public function logout()
    {
        return redirect('/admin');
    }
}
