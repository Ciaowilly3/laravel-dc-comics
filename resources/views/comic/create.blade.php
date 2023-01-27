@extends('layouts.comic_layout')

@section('content')
    <h3 class="text-center text-primary">
        zona creazione
    </h3>
    <div class="container bg-secondary rounded-3 p-3 text-center"> 
        <form action="{{route ('comic.store')}}" class="form-group w-75 d-inline-block" method="POST">
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="number" step=".01" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie di appartenenza</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Data di uscita</label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Genere di fumetto</label>
                <input type="text" class="form-control" name="type">
            </div>     
        </form>  
    </div> 
@endsection
