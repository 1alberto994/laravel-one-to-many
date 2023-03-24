@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="card-title">Aggiungi post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" id="title" required maxlength="255" placeholder="Inserisci il titolo">
                    </div>
                    
                    
                   
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Inserisci una descrizione"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">
                            Immagine in evidenza
                        </label>
                        <input
                            type="file"
                            class="form-control"
                            id="img"
                            name="img"
                            accept="image/*"
                            placeholder="Inserisci l'immagine in evidenza...">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">
                            Salva
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection