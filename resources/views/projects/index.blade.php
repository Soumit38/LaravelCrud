@extends('layout')

@section('title', 'Projects Pane')


@section('content')
<h1>Projects</h1>
</br>

<ul>
    @foreach($projects as $project)
        <li>
            <a href="/projects/{{ $project->id }}">{{ $project->title}}</a>
        </li>
    @endforeach
</ul>

@endsection