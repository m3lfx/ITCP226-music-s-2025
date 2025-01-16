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
        return view('artist.create');
    }

    public function store(Request $request)
    {
        // dd($request->img_path);
       
        $artist = new Artist();
        $artist->name = trim($request->name);
        $artist->country = trim($request->country);
        $artist->img_path = trim($request->img_path);
        $artist->save();
        return redirect('/artists');
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
