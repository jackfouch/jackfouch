@extends('layouts.default')

@section('picture-bar')
<div class="container d-flex">
    <h1>Pictures</h1>
</div>
@endsection

@section('overview')
<div class="container d-flex flex-column align-items-center section-1">
    <h1 class="section-title">Overview</h1>
    <p class="section-body">I am a Computer Scientist</p>
</div>
@endsection

@section('education')
<div class="container d-flex flex-column align-items-center section-2">
    <h1 class="section-title">Education</h1>
    <p>I will graduate with a Bachelor's of Science Degree in Computer Science from Central Michigan University in May 2021.</p>
</div>
@endsection

@section('projects')
<div class="container d-flex flex-column align-items-center section-3">
    <h1 class="section-title">Projects</h1>
    <h5 class="section-title">Tweet Analysis</h5>
    <p>I wrote a Python script that will get tweets from specific users and analyze the sentiment of each Tweet's grammar. 
        I plan on implementing a neural network that will make some prediction about the user based upon their total sentiment
         across all tweets.
    </p>
</div>
@endsection