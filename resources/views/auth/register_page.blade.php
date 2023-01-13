@extends('layout.auth_layout')


@section('title', 'Register')

@section('background-color', '#32303F')

@section('label-color', 'white')

@section('button-background-color', '#D3E6FC')

@section('button-font-color', '#423F50')

@section('placeholder-color', '#B9B9B9')

@section('sub-title', 'Join and learn with us!')

@section('title-color', 'white')

@section('form-action', '/register')

@section('form')
    <br><label for="username">Username</label>
    <br><input type="text" name="username" placeholder="Username">
    <br><label for="email">Email Address</label>
    <br><input type="email" name="email" placeholder="Email Address">
    <br><label for="password">Password</label>
    <br><input type="password" name="password" placeholder="Password">
    <br><label for="confirm-password">Confirm Password</label>
    <br><input type="password" name="password_confirmation" placeholder="Confirm Password">
@endsection

