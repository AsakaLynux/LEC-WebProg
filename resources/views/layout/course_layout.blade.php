<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
</head>
<script src="script/jquery-3.6.0.min.js"></script>
<script src="script/script.js"></script>
<style>
    body {
        text-align: center;
        background-color: @yield('background-page');
        font-family: 'Inter', sans-serif;
    }
    .suggest {
        width: 282px;
        height: 40px;
        border-radius: 40px;
        font-size: 20px;
        font-weight: 700;
        display: inline-table;

        background-color: @yield('background-suggest');
    }
    #title {
        font-size: 75px;
        font-weight: bold;
        color: @yield('title-color');
    }
    #subtitle {
        font-size: 25px;
        font-weight: 700;
        color: @yield('subtitle-color');
    }
    img {
        color: white;
        width: 22px;
        height: 22px;
    }

    .inline-block-child {
        display: inline-block;
    }

    .course {
    height: auto;
    padding: 20px;
    margin: 0;
    list-style: none;
    color: white
    }

    li:nth-child(odd) {
        color: #3F3430;
        background-color: @yield('materi-background-color-odd');

    }

    li:nth-child(even) {
        color: white;
        background-color: @yield('materi-background-color-even');
    }

    li>h2 {
        font-size: 30px;
        font-weight: 700;
    }
    .course>li {
        height: auto;
        padding: 20px;
        margin: 0 auto 15px auto;
        border-radius: 5px;
        cursor: pointer;
    }

</style>
<body>
    <h1 id="title">@yield('title')</h1>
    <h2 id="subtitle">@yield('subtitle')</h2>
    <div class="suggest">
        <a href="/update-course" style="text-decoration: none;">
            <img class="child inline-block-child" src="storage/images/edit_icon.png" alt="">
            <h4 class="child inline-block-child" style="color: @yield('suggest-color')">Edit Course</h4>
        </a>
    </div>
    <div class="suggest">
        <a href="#"  style="text-decoration: none;">
            <img class="child inline-block-child" src="storage/images/suggest_icon.png" alt="">
        <h4 class="child inline-block-child" style="color: @yield('suggest-color')">Any Suggestion?</h4>
        </a>

    </div>
        <ul class="course">
            <li>
                <h2>@yield('materi-1')</h2>
                <div class="answer">
                    @yield('pembahasan-1')
                </div>
            </li>
            <li>
                <h2>@yield('materi-2')</h2>
                <div class="answer">
                    @yield('pembahasan-2')
                </div>
            </li>
            <li>
                <h2>@yield('materi-3')</h2>
                <div class="answer">
                    @yield('pembahasan-3')
                </div>
            </li>
            <li>
                <h2>@yield('materi-4')</h2>
                <div class="answer">
                    @yield('pembahasan-4')
                </div>
            </li>
            <li>
                <h2>@yield('materi-5')</h2>
                <div class="answer">
                    @yield('pembahasan-5')

                </div>
            </li>

        </ul>
</body>
</html>
