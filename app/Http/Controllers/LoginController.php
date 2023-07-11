<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function create(){
        return view('login.create');
    }


    public function store(Request $request){
    
       $login= new Login();
       $login->email=$request->email;
       $login->name=$request->name;
       $login->password=$request->password;

    //    return $login;
        $login->save();

            
    }

}

