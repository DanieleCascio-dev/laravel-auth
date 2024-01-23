@extends('layouts.admin')

@section('content')
<div class="container">

  <h2>Welcome to the admin area!</h2>
  <h3>Here you can find all the projects</h3>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Slug</th>
        <th scope="col">Creation date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      
      <tr>
        <td>{{ $project->title }}</td>
        <td>{{ $project->description }}</td>
        <td>{{ $project->slug }}</td>
        <td>{{ $project->created_at }}</td>
        <td></td>
      </tr>

        @endforeach
    </tbody>
  </table>
</div>
@endsection