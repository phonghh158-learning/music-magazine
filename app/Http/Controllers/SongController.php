<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index() {
        $songs = Song::with('artists')->get();
        return view('songs.index', compact('songs'));
    }
    
    public function show($id) {
        $song = Song::with(['artists', 'album'])->findOrFail($id);
        return view('songs.show', compact('song'));
    }
}
