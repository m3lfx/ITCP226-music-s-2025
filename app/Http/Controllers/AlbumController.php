<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;
use DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = DB::table('albums AS al')
            ->join('artists AS ar', 'ar.id', '=', 'al.artist_id')
            ->select('al.id AS album_id', 'al.title', 'ar.name', 'al.genre', 'al.date_released')
            ->paginate(20);
        //    dd($albums); 
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();
        return view('album.create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $album = new Album();
        $album->title = $request->title;
        $album->genre = $request->genre;
        $album->date_released = $request->date_released;
        $album->artist_id = $request->artist_id;
        $album->save();
        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        // $artist_album = DB::table('artists')
        //             ->select('id', 'name')
        //             ->where('id', '=', $album->artist_id)->toSql();
        // $artists = DB::table('artists')
        //             ->select('id', 'name')
        //             ->where('id', '<>', $album->artist_id)->toSql();
        // dd($artist_album->name, $artist_album->id);
        // dd($artist_album);
        $artists = Artist::all();
        // return view('album.edit', compact('album', 'artist_album', 'artists'));
        return view('album.edit', compact('artists', 'album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::where('id', $id)
                    ->update([
                        'title' => trim($request->title),
                        'genre' => $request->genre,
                        'date_released' => $request->date_released,
                        'artist_id' => $request->artist_id,
                    ]);
        if ($album) {
            return redirect()->route('albums.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Album::destroy($id);
        return redirect()->route('albums.index');
    }
}
