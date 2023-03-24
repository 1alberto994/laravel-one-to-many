@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $post->title }}</h1>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                    Torna indietro
                </a>
            </div>
        </div>
        <div class="row g-3">
            <div class="col mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <p>{{ $post->description }}</p>
                    </div>
                </div>
            </div>
            <h3>
                    Type:
                    @if ($post->type)
                        <a href="{{ route('admin.typeas.show', $post->type->id) }}">
                            {{ $post->type->name }}
                        </a>
                    @else
                        Nessuna categoria
                    @endif
                </h3>
        </div>
                @if ($post->img)
                    <div>
                        <img src="{{ asset('storage/'.$post->img) }}" style="height: 300px;" alt="null">
                    </div>
                @endif
    </div>
@endsection