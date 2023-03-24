@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    Tutte le categorie
                </h1>

                <a href="{{ route('admin.types.create') }}" class="btn btn-success">
                    Aggiungi categoria
                </a>
            </div>
        </div>

        

        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Slug</th>
                            <th scope="col"># articoli</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{ $type->id }}</th>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->slug }}</td>
                                <!-- {{-- SELECT COUNT(*) FROM posts where category_id = $type>id --}} -->
                                <td>{{ $type->posts()->count() }}</td>
                                <td>
                                    <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-primary">
                                        Dettagli
                                    </a>
                                    <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-warning">
                                        Aggiorna
                                    </a>
                                    <form
                                        class="d-inline-block"
                                        action="{{ route('admin.types.destroy', $type->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Sei sicuro di voler eliminare questo type?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection