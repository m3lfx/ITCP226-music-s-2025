<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listener;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    public function register(Request $request){
        // dd(Hash::make($request->password));
        $user = User::create([
            'email' => trim($request->email),
            'password' => Hash::make($request->password),
            'name' => $request->fname. " ". $request->lname
        ]);

        $user = Listener::create([
            'fname' => trim($request->fname),
            'lname' => trim($request->lname),
            'address' => $request->address,
            'img_path' => $request->img_path,
            'user_id' => $user->id

        ]);

        dd($user);
        
    }
}
