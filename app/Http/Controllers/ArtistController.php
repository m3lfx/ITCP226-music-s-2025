<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {

        $data['name'] = "my laravel";
        return View::make('artist', $data);
    }

    public function create()
    {
        return "create artist";
    }

    public function store()
    {
        $artist = new Artist();
        $artist->name = 'artist 1';
        $artist->country = 'philippines';
        $artist->img_path = 'artist1.jpg';
        $artist->save();
    }

    public function edit($id)
    {
        $artist = Artist::find($id);
        // dd($artist->name);
        // $data['artist'] = $artist;
        // dd($data);
        // return view('home', $data);
        // dd(compact('artist'));
        return view('home', compact('artist'));
    }

    public function update()
    {
        return "update artist";
    }

    public function delete()
    {
        return "delete artist";
    }
}
