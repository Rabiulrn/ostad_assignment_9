@extends('layouts.master')

@section('title', 'project Page')

@section('content')
<div class="projects-container">
    <h1>My Projects</h1>

    @foreach($data as $project)
        <div class="project-card">
            <h2>{{ $project->name }}</h2>
            <p>{{ $project->description }}</p>
        </div>
    @endforeach

</div>
@endsection