

@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1>
                    {{ $type->name }}
                </h1>
                <h6>
                    Slug: {{ $type->slug }}
                </h6>

                <h2>
                    Articoli associati ({{ $type->posts()->count() }})
                </h2>
                @if ($type->posts()->count() > 0)
                    <ul>
                        @foreach ($type->posts as $post)
                        <li>
                            <a href="{{ route('admin.posts.show', $post->id) }}">
                                {{ $post->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <h3>
                        Nessun articolo associato
                    </h3>
                @endif
            </div>
        </div>
    </div>
@endsection