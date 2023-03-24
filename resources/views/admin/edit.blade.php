@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Modifica post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('admin.posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label" >Titolo</label>
                        <input type="text" class="form-control" name="title" id="title"value="{{$post->title}}" required maxlength="255" placeholder="Inserisci il titolo">
                    </div>
                    
                   
                   
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione">{{$post->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">
                            Type
                        </label>
                        <select name="type_id" id="type_id" class="form-select">
                            <option value="">Nessuna categoria</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ old( 'type_id', $post->type_id) == $type->id ? 'selected' : '' }} > {{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">
                            Immagine in evidenza
                        </label>

                        @if ($post->img)
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="delete_img" id="delete_img">
                                <label class="form-check-label" for="delete_img">
                                    Cancella immagine in evidenza!
                                </label>
                            </div>

                            <div class="mb-2">
                                <img src="{{ asset('storage/'.$post->img) }}" style="height: 300px;" alt="">
                            </div>
                        @endif

                        <input
                            type="file"
                            class="form-control"
                            id="img"
                            name="img"
                            accept="image/*"
                            placeholder="Inserisci l'immagine in evidenza...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning">
                            Aggiorna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection