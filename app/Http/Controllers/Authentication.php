<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admins;
use Hash;
use Session;
class Authentication extends Controller
{
    
    public function loginAdmin(Request $request){
        session()->regenerate();
        $request->validate([
            'Email'=>'required|email',
            'Password'=>'required|min:5|max:12',
        ]);
        
        $users= Admins::where('email','=',$request->Email)->first();
        if($users){
        if($request->Password==$users->Password){
             $sessionData = [
                'loginId' => $users['id'],
                'name' => $users['Name'],
                'email' => $users['Email'],
                'logged' => TRUE,
                
            ];
       
            session($sessionData);
            return redirect('/dashboard');
           
            
        }else{
            return back()-> with('fail', 'Password not match '); 
        }
        }else{
            return back()-> with('fail', 'This email is not registered '); 
        }
        
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/adminlogin');
        }
    }
}
