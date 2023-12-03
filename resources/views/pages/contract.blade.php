@extends('layouts.master')

@section('title', 'Contract Page')

@section('content')
<div class="contact-container">
        <h1>Contact Me</h1>

        <form action="#" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection