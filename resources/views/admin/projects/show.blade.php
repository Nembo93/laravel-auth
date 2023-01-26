@extends('layouts.admin');

@section('content')
<div class="container">
  <div class="py-4">
    <h1>{{$project->title}}</h1>
    <div class="mt-4">
        {{$project->description}}
    </div>
    <h2>Customer: {{$project->customer}}</h2>
  </div>
</div>
@endsection