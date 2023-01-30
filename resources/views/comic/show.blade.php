@extends('layouts.comic_layout');
@section("title", "single comic");
@section('content')
    <h3 class="text-success text-center">Ti trovi nella zona dove si mostra un solo comic</h3>
    <div class="container bg-secondary rounded py-5 px-3">
        <ul>
            <li><h5>{{$comicToShow->title}}</h5></li>
            <li><strong>{{$comicToShow->price}}</strong></li>
            <li>{{$comicToShow->description}}</li>
            <li>{{$comicToShow->sale_date}}</li>
            <li>{{$comicToShow->series}}</li>
            <li>{{$comicToShow->thumb}}</li>
        </ul>
    </div>
@endsection