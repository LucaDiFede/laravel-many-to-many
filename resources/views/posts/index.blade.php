@extends('layouts.guest')

@section('page-title', 'Articoli')

@section('main-content')
    <div class="row">
        <div class="col-12">
                <h1 class="text-center text-success">
                    Articoli
                </h1>
        </div>
        @foreach ($posts as $post)
            <div class="col-12 col-xs-6 col-sm-4 col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2>
                        {{ $post->title }}
                    </h2>

                    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">
                        Leggi tutto
                    </a>
                </div>
            </div>
            </div>
        @endforeach
    </div>
@endsection
