@extends('layout.auth_layout')


@section('title', 'Login')

@section('background-color', '#E0FFDD')

@section('label-color', '#47464C')

@section('button-background-color', '#729D83')

@section('button-font-color', '#E0FFDD')

@section('placeholder-color', '#757373')

@section('sub-title', 'Login to your existing account')

@section('title-color', '#47464C')

@section('form-action', '/login')

@section('form')
    <br><label for="username">Username</label>
    <br><input type="text" name="username" placeholder="Username">
    <br><label for="password">Password</label>
    <br><input type="password" name="password" placeholder="Password">
@endsection

