@extends('layout')

@section('title', 'Projects Pane')


@section('content')
    <h1>Create a new Project</h1>
    </br>


    <form method="post" action="/projects">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control {{ $errors->has('title') ? 'alert-danger' : '' }}"
                   name="title" value="{{ old('title') }}" aria-describedby="titlehelp" placeholder="Enter title">
            <small id="titleHelp" class="form-text text-muted">Enter a smart title </small>
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea class="form-control {{ $errors->has('description')? 'alert-danger': '' }}"
                      name="description" placeholder="Enter Description"
                      rows="3">{{ old('description') }}</textarea>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        @include('errors')

    </form>

@endsection