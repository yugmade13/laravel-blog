@extends('layouts/app')

@section('content')
    <a href="/article"><< Back</a>
    <h1>Article title : {{ $article->title }}</h1>
    <p>Article Body : {{ $article->body }}</p>
    <div class="d-flex">
        <div class="m-1">
            <a class="btn btn-primary" href="/article/{{ $article->slug }}/edit">Edit</a>
        </div>
        <form class="m-1" action="/article/{{ $article->id }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>

    @include('layouts/footer')
@endsection
