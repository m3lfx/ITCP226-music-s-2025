<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        // dd(compact('artists'));

        return view('artist.index', compact('artists'));
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
        $artist = new Artist();
        $artist->name = 'artist 2';
        $artist->country = 'korea';
        $artist->img_path = 'artist1.jpg';
        $artist->save();

        $artist = new Artist();
        $artist->name = 'artist 3';
        $artist->country = 'italy';
        $artist->img_path = 'artist3.jpg';
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

    public function update($id)
    {
        // $artist = Artist::where('id',$id)->orWhere('id', 2)->get();
        $artist = Artist::find([1, 2]);
        // $artist->name = 'new artist jan 9';
        // $artist->country = 'zimbabwe';
        // $artist->save();

        dd($artist);

        return "update artist";
    }

    public function delete($id)
    {
        // $artist = Artist::find($id)->delete();
        // $artist->delete();
        Artist::destroy($id);
        return "artist deleted";
    }
}
