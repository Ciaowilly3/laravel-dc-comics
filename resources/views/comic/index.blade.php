
@extends('layouts.comic_layout');
@section('content')
    <h3 class="text-success text-center">Ti trovi nell'index</h3>
    <h6 class="text-primary text-center" >ecco tutti i fumetti</h6>
    <div class="container d-flex justify-content-between bg-secondary flex-wrap">
        @foreach ($allComics as $comic)
        <ul>
            <li>{{$comic->title}}
                <ul>
                    <li>{{$comic->description}}</li>
                    <li>{{$comic->created_at}}</li>
                    <li>{{$comic->sale_date}}</li>
                    <li>{{$comic->series}}</li>
                    <li><strong>{{$comic->price}}</strong></li>
                </ul>
            </li>
        </ul>
        @endforeach
    </div>
@endsection