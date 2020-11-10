@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crea il tuo Articolo</h1>
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Inserisci lo slug">
        </div>

        <div class="form-group">
            <label for="Content">Contenuto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
</div>

@endsection