@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            Dettagli
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $project->name }}</h5>
            <p class="m-0"><strong>Descrizione:</strong> {{ $project->description }}</p>
            <p class="m-0"><strong>Data di creazione:</strong> {{ $project->created_at->format('d-m-Y') }}</p>
            <p class="m-0"><strong>Status:</strong> {{ $project->status ? 'Done' : 'In progress' }}</p>
            <p class="m-0"><strong>Github:</strong> {{ $project->github }}</p>
            <p class="mb-2"><strong>Tipo:</strong> {{ $project->type ? $project->type->name : 'nessuna categoria' }}
            </p>
            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}"><i
                    class="fa-solid fa-arrow-rotate-left"></i></a>
            {{-- <a class="btn btn-primary" href="#"><i class="fa-solid fa-eye"></i></a> --}}
            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}"><i
                    class="fa-solid fa-pen-to-square"></i></a>
            <form class="d-inline" onsubmit="return confirm('Sicuro di voler eliminare?')"
                action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>

        </div>
    </div>
@endsection
