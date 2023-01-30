
@extends('layouts.comic_layout');
@section('title', "index")
@section('content')
    <h3 class="text-success text-center">Ti trovi nell'index</h3>
    <h6 class="text-primary text-center" >ecco tutti i fumetti</h6>
    <table class="table table-striped bg-white">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Series</th>
                <th>Price</th>
                <th>Type</th>
                <th>Thumb</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($allComics as $comic)
            <tr>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->price}}&euro;</td>
                <td>{{$comic->type}}</td>
                <td><img src="{{$comic->thumb}}" alt="" class="d-inline-block w-25"> </td>
                <td class="text-nowrap">
                    <a href="{{route("comic.show", $comic->id)}}"><i class="fas fa-eye"></i></a>
                    <a href="{{route("comic.edit", $comic->id)}}"><i class="fas fa-pencil"></i></a>
                    <form class="delete-form d-inline-block" action="{{route("comic.destroy", $comic->id)}}" method="POST">
                    @csrf()
                    @method("delete")    
                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection