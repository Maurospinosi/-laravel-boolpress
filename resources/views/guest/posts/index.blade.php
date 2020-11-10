@extends('layouts.app')

@section('content')
<h1>parte pubblica</h1>
<ul>
    @foreach ($articles as $article)
        <li>
            <h2>{{$article->title}}</h2>
            <p>{{$article->content}}</p>
            <a href="{{route('posts.show', $article->slug)}}">Read More</a>
            {{-- <div>{{$article->user->name}}></div> --}}
        </li>    
    @endforeach

</ul>
@endsection
