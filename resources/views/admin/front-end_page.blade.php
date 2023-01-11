@extends('layout.front&back_layout')

@section('title', 'Front-End')

@section('title-image', 'eyes.jpg')

@section('course-title-font-color', '#E0FFDD')

@section('course-subtitle-font-color', 'white')

@section('category-title-clor', '#FFFFFF')

@section('background-color', '#32303F')

@section('new-course-color', '#32303F')

@section('new-course-background-color', '#FFFFFF')

@section('course')

<a href="/html">
    <form action="">
        <div class="delete" style="background-color: #FFE1E1">
            <button type="submit" class="button"><img src="{{URL ('image/vector.jpg')}}" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #EDB8AC;">
        <h1 style="color: #32303F">HTML</h1>
        <h2 style="color: #B0695A">STRUCTURAL</h2>
        <img src="{{URL ('image/html.jpg')}}" alt="">
        <h3 style="color: #B0695A">The language for building web pages</h3>
    </div>
</a>
<a href="/css">
    <form action="">
        <div class="delete" style="background-color: #F4F4F4">
            <button type="submit" class="button"><img src="{{URL ('image/vector.jpg')}}" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #B5B5B5;">
        <h1 style="color: #32303F">CSS</h1>
        <h2 style="color: #494949">PRESENTATIONAL</h2>
        <img src="{{URL ('image/css.jpg')}}" alt="">
        <h3 style="color: #494949">The language for styling web pages</h3>
    </div>
</a>
<a href="/javascript">
    <form action="">
        <div class="delete" style="background-color: #DFFCFF">
            <button type="submit" class="button"><img src="{{URL ('image/vector.jpg')}}" alt=""></button>
        </div>
    </form>
    <div class="card" style="background-color: #ACE5ED;">
        <h1 style="color: #32303F">JavaScript</h1>
        <h2 style="color: #34747C">BEHAVIORAL</h2>
        <img src="{{URL ('image/javascript.jpg')}}" alt="">
        <h3 style="color: #34747C">The language for programming web pages</h3>
    </div>
</a>
@endsection

