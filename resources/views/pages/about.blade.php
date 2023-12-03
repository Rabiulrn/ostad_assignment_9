@extends('layouts.master')

@section('title', 'About Page')

@section('content')
<div class="about-container">
        <section class="bio-section">
            <h1>About Me</h1>
            <p>Hello, I'm [Your Name], a [Your Role/Profession] with a passion for [Your Interests].</p>
        </section>

        <section class="education-section">
            <h2>Education</h2>
            <p>[Your University], [Degree], [Year]</p>
            <!-- Add more education details as needed -->
        </section>

        <section class="experience-section">
            <h2>Work Experience</h2>
            <p>[Your Job Title], [Company], [Year]</p>
            <!-- Add more work experience details as needed -->
        </section>

        <section class="certifications-section">
            <h2>Certifications</h2>
            <p>[Certification Name], [Issuing Organization], [Year]</p>
            <!-- Add more certification details as needed -->
        </section>
    </div>
@endsection