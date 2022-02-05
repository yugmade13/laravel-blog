@extends('layouts/app')

@section('content')
    <a href="/article"><< Back</a>
    <form action="/article" method="post">
        @csrf
        <div class="form-group p-1">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                placeholder="Masukkan judul" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group p-1">
            <label for="textbody">Body</label>
            <textarea class="form-control @error('textbody') is-invalid @enderror" name="textbody" id="textbody"
                style="height: 200px">{{ old('textbody') }}</textarea>
            @error('textbody')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Upload" class="btn btn-primary m-1">
        </div>
    </form>
@endsection
