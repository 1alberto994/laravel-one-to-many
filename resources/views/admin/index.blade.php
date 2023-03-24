@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Tutti i post</h1>

                <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                    Aggiungi Post
                </a>
            </div>
        </div>
        <div class="row g-3">
            @foreach ($posts as $post)
                <div class="col-4 mb-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>

                            <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">
                                Vedi dettagli
                            </a>
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-warning">
                                Aggiorna
                            </a>
                            <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Sei sicuro di voler eliminare questo post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection