@extends('layouts.app');

@section('content')
<div class="container">
    <h1>Modifica Progetto #{{ $project->id }}</h1>

    <form enctype="multipart/form-data" action="{{ route('admin.projects.update', $project->id) }}" method="POST">
    @csrf
    @method('put')
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $project->name) }}">
            @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $project->description) }}">
            @error('description')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Immagine</label>
            <input type="file" class="form-control @error('cover_img') is-invalid @enderror" name="cover_img" value="{{ old('cover_img', $project->cover_img) }}">
            @error('cover_img')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label class="form-label">Link Github</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $project->link) }}">
            @error('link')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type_id') is-invalid @enderror" name="type_id" value="{{ old('type_id', $project->type_id) }}">
            @error('type_id')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

    <button class="btn btn-primary" type="submit">Salva le modifiche</button>
    </form>
</div>
@endsection