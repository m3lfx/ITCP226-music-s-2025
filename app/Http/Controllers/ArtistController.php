<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index() {
        return "hello world index atist";
    }

    public function create() {
        return "create artist";
    }
}
