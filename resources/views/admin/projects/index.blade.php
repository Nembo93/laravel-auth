@extends('layouts.admin')

@section('content')
    
    <table class="table table-striped table-inverse table-responsive">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Cliente</th>
                <th scope="col">Slug</th>
                <th scope="col">Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->customer }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                {{-- <a href="{{ route('admin.projects.edit', $post) }}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a> --}}
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$project->id}}">
                    <i class="fa-solid fa-trash"></i>
                </button> --}}
                </td>
            </tr>
            @endforeach
    </table>
@endsection