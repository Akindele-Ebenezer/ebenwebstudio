@extends('layout')

@section('title', strtoupper($name) . ' - Success')
@section('content')

    <div class="email-success-wrapper">
        <div class="email-success">
            <center><div style="background-image: url(images/success.png)"></div></center>
            <h1>Message sent successfully.</h1>
            <big><em>Thanks, {{ $name }}</em></big>
            <br><br>
            <p>I'll get back to you as soon as possible.</p>
            <p><a href="/">GO HOME</a></p>
        </div>
    </div>

@endsection