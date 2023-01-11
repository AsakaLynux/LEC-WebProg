@extends('layout.front&back_layout')

@section('title', 'Back-End')

@section('title-image', 'serrations_icon.png')

@section('course-title-font-color', '#E0FFDD')

@section('course-subtitle-font-color', 'white')

@section('category-title-clor', '#47464C')

@section('background-color', '#E0FFDD')

@section('new-course-color', '#E0FFDD')

@section('new-course-background-color', '#5B9277')

@section('course')
<a href="/sql">
    <form action="">
        <div class="delete" style="background-color: #B8F1B3">
            <button type="submit" class="button"><img src="storage/images/delete_icon.png" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #729D83;">
        <h1>SQL</h1>
        <h3>A language for accessing databases</h3>
    </div>
</a>
<a href="/php">
    <form action="">
        <div class="delete" style="background-color: #DAF5F9">
            <button type="submit" class="button"><img src="storage/images/delete_icon.png" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #6A94C5;">
        <h1>PHP</h1>
        <h3>A web server programming language</h3>
    </div>
</a>
<a href="/python">
    <form action="">
        <div class="delete" style="background-color: #C6B5B2">
            <button type="submit" class="button"><img src="storage/images/delete_icon.png" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #71625F;">
        <h1>Python</h1>
        <h3>A popular programming language</h3>
    </div>
</a>
<a href="/c++">
    <form action="">
        <div class="delete" style="background-color: #F6E6E1">
            <button type="submit" class="button"><img src="storage/images/delete_icon.png" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #D89C8F;">
        <h1>C++</h1>
        <h3>A programming language</h3>
    </div>
</a>
@endsection

@section('new-course-button')
<div class="new-course">
    <a href="/create-course">
        <img src="storage/images/add_icon.png" alt="">
        <p>Add New Course</p>
    </a>
</div>
@endsection
