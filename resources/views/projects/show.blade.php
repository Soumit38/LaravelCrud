@extends('layout')

@section('title', 'Show Projects Pane')


@section('content')
<h1>{{ $project->title }}</h1>
</br>

<h5>ID : {{ $project->id }}</h5>
<h5>Description : {{ $project->description }}</h5>

<p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>


@if($project->tasks->count())
    <div class="container">
        @foreach($project->tasks as $task)
            <li style="list-style: none">
               {{--
                either one will do
                patch /projects/id/tasks/id
                patch /tasks/id
                --}}
                <form method="post" action="/tasks/{{ $task->id }}">
                    @method('PATCH')
                    @csrf
                    <label class="form-check-label " for="completed"></label>
                    <input type="checkbox" class="form-check-input" name="completed"
                           onchange="this.form.submit()" {{ $task->completed? 'checked':'' }} >
                    <span {{ $task->completed ? 'is-complete':'' }}>{{ $task->description }}</span>
                </form>

            </li>
        @endforeach
    </div>
@endif

</br>

    <form method="post" action="/projects/{{ $project->id }}/tasks">

        @csrf

        <div class="form-group">
            <label for="taskName"><h4>New Task</h4> </label>
            <input type="text" class="form-control" name="description"
                   aria-describedby="taskHelp" placeholder="New Task">
            <small id="taskHelp" class="form-text text-muted">Create your new task here.</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        @include('errors')

    </form>


@endsection