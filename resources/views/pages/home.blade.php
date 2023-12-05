
<!-- resources/views/home.blade.php -->

@extends('layouts.master')

@section('title', 'Home Page')

@section('content')
<div class="home-container">
        <section class="hero-section">
            <h1>Welcome to My Portfolio</h1>
            <p>Hello, I'm Rabiul Islam, a passionate Programmer.</p>
            <a href="{{ route('about') }}" class="cta-button">Learn More</a>
        </section>

        <section class="skills-section">
            <h2>Skills</h2>
            <ul>
                <li>Web Development</li>
                <li>UI/UX Design</li>
              
                <!-- Add more skills as needed -->
            </ul>
        </section>
    </div>
@endsection

