@extends('layouts.app')

@section('content')
    <h1>{{ $artist->artist_name }}</h1>
    <p>{{ $artist->bio }}</p>

    <h2>Bài hát của nghệ sĩ này:</h2>
    <ul>
        @foreach($artist->songs as $song)
            <li>{{ $song->title }}</li>
        @endforeach
    </ul>
@endsection
