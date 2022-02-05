@extends('layouts/app')

@section('content')
    <a href="/article/create" class="btn btn-primary">Tambah +</a>
    <h2 class="p-2 fw-bold">Ini halaman article</h2>
    <hr>
    <div class="container">
        @foreach ($articles->chunk(3) as $articleChunk)
            <div class="row">
                @foreach ($articleChunk as $article)
                    <div class="col-sm card m-1">
                        <div class="card-body">
                            <h5 class="fw-bold"><a class="stretched-link text-decoration-none text-dark" href="/article/{{ $article->slug }}">{{ Str::substr($article->title, 0, 50) }}</a></h5>
                            <p>{{ Str::substr($article->body, 0, 200) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="m-4">
        {{ $articles->links() }}
    </div>

    @include('layouts/footer')
@endsection