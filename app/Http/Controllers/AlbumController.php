<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index() {
        $albums = Album::with('songs')->get();
        return view('albums.index', compact('albums'));
    }
    
    public function show($id) {
        $album = Album::with(['songs', 'artist'])->findOrFail($id);
        return view('albums.show', compact('album'));
    }
}
