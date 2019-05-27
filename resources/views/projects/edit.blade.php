@extends('layout')

@section('title', 'Edit Project')


@section('content')
<h1>Edit Projects</h1>
</br>

<form method="POST" action="/projects/{{ $project->id }}">
    @method('PATCH')
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{ $project->title }}" id="title" aria-describedby="titlehelp">
        <small id="titleHelp" class="form-text text-muted">Enter a smart title </small>
    </div>
    <div class="form-group">
        <label for="description">Description: </label>
        <textarea class="form-control" name="description" rows="3">{{ $project->description }}</textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-success">Update Project</button>

</form>


<form method="post" action="/projects/{{ $project->id }}">
    @method('DELETE')
    @csrf

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-danger">Delete Project</button>
    </div>
</form>




@endsection