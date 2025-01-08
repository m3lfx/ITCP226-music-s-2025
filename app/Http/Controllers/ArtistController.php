<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ArtistController extends Controller
{
    public function index() {
        
        $data['name'] = "my laravel";
        return View::make('artist', $data);
    }

    public function create() {
        return "create artist";
    }
}
