@extends('layouts.default')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center">
    <h1 class="section-header text-dark mt-5 mb-3">Capstone</h1>
    <div class="container">
        <p class="section-body text-dark">
            During the Fall semester of my Senior year I took Software Engineering which serves as Central Michigan University's Computer Science capstone.
            During this course I worked in a group of 4 CS majors to link a drone with a flight simulator with the help of Alex Redei, a CMU Professor who was our project advisor.
        </p>
    </div>
    <h1 class="section-header text-dark mt-5 mb-3">Tweet Analysis</h1>
    <div class="container">
        <p class="section-body text-dark">
            A Python script that interacts with Twitter's API to fetch tweets from given users and measures the sentiment and hostility of each tweet based off of an
            external language analyzing library. I intend to use this data to try and predict other behavior from the same users either on Twitter or other social media.
            The library currently used is not as accurate as I would like, so I am going to look into possibly developing my own sentiment analysis program.
        </p>
    </div>
    <h1 class="section-header text-dark mt-5 mb-3">Future Ideas</h1>
    <div class="container">
        <p class="section-body text-dark">
            In the future I hope to continue to progress my Web Development skills, as well as to branch into data science and analysis.
        </p>
    </div>

</div>
@endsection