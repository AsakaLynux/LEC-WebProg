<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='css/style.css' type="text/css">
    <title>@yield('title')</title>
</head>
<style>
    * {
        background-color: @yield('background-color');
        text-align: center;
    }

    body {
        /* margin: 103px 144px; */
        text-align: center;
    }
    .textForm {
        /* position: relative; */
        display: inline-block;
        width: 1000px;
        /* margin: 83px 0; */
        margin-top: 40px;
        /* border: solid 1px white; */
        text-align: right;
    }
    .textForm label {
        display: flex;
        color: @yield('label-color');
        font-size: 1.5em;
        font-weight: 700;
        text-align: left;
    }

    .textForm input {
        width: 950px;
        height: 40px;
        border: solid 1px @yield('label-color');
        border-radius: 30px;
        margin-bottom: 20px;
        text-align: left;
        color: @yield('label-color');
        font-size: 1em;
        padding-left: 20px;
    }

    button {
        width: 950px;
        height: 45px;;
        border-radius: 40px;
        background-color: @yield('button-background-color');
        color: @yield('button-font-color');
        font-size: 1.2em;
        margin-top: 20px;
        border: none;
    }
    ::placeholder {
        color: @yield('placeholder-color');
        font-size: 1.2em;
        font-weight: 300;

        text-align: left;
    }

</style>
<body>
    <h1 style="color: @yield('title-color'); font-weight: 700; font-size: 4em">@yield('title')</h1>
    <p style="color: @yield('title-color'); font-weight: 600; font-size: 1.5em">@yield('sub-title')</p>

    <div class="textForm">
        <form action="@yield('form-action')" method="POST">
            @csrf
            @yield('form')
            <br><button type="submit">@yield('title')</button>
        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>
