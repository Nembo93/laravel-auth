@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="py-4">
    <h1>Crea nuovo progetto</h1>
    
    <div class="mt-4">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del progetto" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del progetto</label>
                <textarea class="form-control" id="content" name="description" rows="10" placeholder="Inserisci la descrizione del progetto">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Nome Cliente</label>
                <input type="text" class="form-control" id="customer" name="customer" placeholder="Inserisci il nome del cliente" value="{{ old('title') }}">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
  </div>
</div>
@endsection