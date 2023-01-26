@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="py-4">
    <h1>Modifica: {{ $project->title }}</h1>
    <div class="mt-4">
        <form action="{{ route('admin.projects.update', $roject) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del progetto" value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del progetto</label>
                <textarea class="form-control" id="content" name="description" rows="10" placeholder="Descrivi il progetto">{{ old('content', $project->description) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
  </div>
</div>
@endsection