@extends('layouts.app')

@section('content')
    <h1>Danh sách Nghệ sĩ</h1>
    <ul>
        @foreach($artists as $artist)
            <li><a href="{{ url('/artists/' . $artist->id) }}">{{ $artist->artist_name }}</a></li>
        @endforeach
    </ul>
@endsection
