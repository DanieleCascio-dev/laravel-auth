@extends('layouts.admin')

@section('content')
  <div class="conatiner">
    <h2>Welcome to the Edit section!</h2>

    <form action="{{ route('admin.projects.update',['project'=>$project->slug]) }}" method="POST">
      @csrf
      @method('PUT');
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input required type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $project->title  }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="2" name="description"> {{ old('description') ?? $project->description }} </textarea>
      </div>

        <button class="btn btn-success">Save</button>
    </form>
  </div>
@endsection