@extends('layouts.admin')

@section('content')
  <div class="container mt-3 p-2">
    <h2>Project details:</h2>
    <h3><strong>Title: </strong>{{ $project->title }}</h3>
    <p><strong>Description: </strong>{{ $project->description }}</p>
    <p><strong>Slug: </strong>{{ $project->slug }}</p>
    <p><strong>Creation date: </strong>{{ $project->created_at }}</p>
  </div>
@endsection