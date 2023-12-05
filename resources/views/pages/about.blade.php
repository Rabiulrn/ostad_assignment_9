@extends('layouts.master')

@section('title', 'About Page')

@section('content')
<div class="about-container">
    <section class="bio-section">
        <h1>About Me</h1>
        <p>Hello, I'm John Doe, a Web Developer with a passion for creating responsive and user-friendly websites.</p>
    </section>

    <section class="education-section">
        <h2>Education</h2>
        <p>University of Web Development, Bachelor of Science in Computer Science, 2020</p>
        <p>Web Design Institute, Web Design Certificate, 2018</p>
    </section>

    <section class="experience-section">
        <h2>Work Experience</h2>
        <p>Senior Web Developer, XYZ Company, 2020-present</p>
        <p>Web Developer, ABC Agency, 2018-2020</p>
    </section>

    <section class="certifications-section">
        <h2>Certifications</h2>
        <p>Front-End Development Certificate, Udemy, 2019</p>
        <p>Responsive Web Design Certification, W3Schools, 2018</p>
    </section>
</div>
@endsection