<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserCOntroller extends Controller
{
    //
    function login(Request $req)
    {
        $user = DB::table('users')->where('email',$req->email)->first();
        if(!$user || !Hash::check($req->password,$user->password))
            {
                return "username and password do not match";
            }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
        
    }

    function register(Request $req)
    {

        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("/login");

    }
}
