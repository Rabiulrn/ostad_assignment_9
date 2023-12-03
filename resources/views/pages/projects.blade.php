@extends('layouts.master')

@section('title', 'project Page')

@section('content')
<div class="projects-container">
        <h1>My Projects</h1>
{{dump($data)}}
        <!-- If using a database, loop through projects -->
  @foreach($data as $project)
            <div class="project-card">
                <h2>{{ $project->name }}</h2>
                <p>{{ $project->description }}</p>
                <!-- Add more project details as needed -->
            </div>
        @endforeach

        <!-- If not using a database, manually create project cards -->
<!--         
        <div class="project-card">
            <h2>Project Title</h2>
            <p>Project Description</p>
        </div>
        -->
    </div>
@endsection