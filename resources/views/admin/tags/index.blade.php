@extends('layouts.app')

@section('page-title', 'Tutti i tag')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Tutti i tag
                    </h1>

                    <div class="mb-3">
                        <a href="{{ route('admin.tags.create') }}" class="btn btn-success w-100">
                            + Aggiungi
                        </a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titolo</th>
                                <th scope="col">Creata il</th>
                                <th scope="col">Alle</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <th scope="row">{{ $tag->id }}</th>
                                    <td>{{ $tag->title }}</td>
                                    {{-- Come formattare una data: https://www.php.net/manual/en/datetime.format.php --}}
                                    <td>{{ $tag->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $tag->created_at->format('H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.tags.show', ['tag' => $tag->id]) }}" class="btn btn-xs btn-primary">
                                            Vedi
                                        </a>
                                        <a href="{{ route('admin.tags.edit', ['tag' => $tag->id]) }}" class="btn btn-xs btn-warning">
                                            Modifica
                                        </a>
                                        <form class="d-inline-block" action="{{ route('admin.tags.destroy', ['tag' => $tag->id]) }}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo tag?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
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
    </div>
@endsection