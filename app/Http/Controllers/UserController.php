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
            'password' => bcrypt($request->password),
            'name' => $request->fname. " ". $request->lname
        ]);

        // $path = $request->file('img_path')->store('images');

        $path = $request->file('img_path')->storeAs(
            'public/images', $request->file('img_path')->hashName()
        );
        // dd($path);
        $listener = Listener::create([
            'fname' => trim($request->fname),
            'lname' => trim($request->lname),
            'address' => $request->address,
            'img_path' => $path,
            'user_id' => $user->id

        ]);

        dd($listener);
        // return redirect()->route('user.profile');
        
    }
}
