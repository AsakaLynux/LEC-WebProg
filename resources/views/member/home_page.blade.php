@extends('layout.home&welcome_course')

@section('title', 'Home')


{{-- left --}}
@section('left-title', 'Front-End')

@section('left-subtitle', 'Front-end development refers to the client-side (how a web page looks).')

@section('left-subtitle')
    <u>HTML</u>, <u>CSS</u>, <u>JavaScript</u>
@endsection

@section('left-button-title', 'Learn')

@section('left-route', '/front-end')

{{--  Right --}}
@section('right-title', 'Back-End')

@section('right-subtitle', 'Back-end development refers to the server-side (how a web page works).')

@section('right-subtitle')
    <u>SQL</u>, <u>PHP</u>, <u>Phyton</u>, <u>C++</u>
@endsection

@section('right-button-title', 'Learn')

@section('right-route', '/back')
