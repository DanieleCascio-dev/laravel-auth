@extends('layouts.admin')

@section('content')
  <div class="container">
    <h2>Create a new project</h2>

    <form class="col-6" action="{{ route('admin.projects.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input required type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="2" name="description"></textarea>
      </div>

        <button class="btn btn-success">Save</button>
    </form>
  </div>
@endsection