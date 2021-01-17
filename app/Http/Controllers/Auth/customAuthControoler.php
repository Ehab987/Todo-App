<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

use Auth;

class customAuthControoler extends Controller
{
    public function adult() {


        return view('customAuth.reviewIndex');
    }
     public function site() {
   
      return view('site');
    }
    public function admin(){

        return view('admin');
    }

    public function adminLogin(){
        return view('auth.adminLogin');
    }

    public function checkAdminLogin(Request $request){//this function to check if the email and password is registered in admins table in database or not
        

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email'));
    }
    
}
