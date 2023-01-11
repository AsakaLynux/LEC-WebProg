<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='css/style.css' type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>@yield('title-page')</title>
</head>
<style>
    * {
        text-align: center;

        background-color: #32303F;
        color: white;
    }

    .title {
        margin: 60px 0 48px 0;
    }
    .title h1{
        font-size: 4em
    }

    .title h4{
        font-size: 1.5em
    }

    .form-text {
        margin-bottom: 150px;
    }

    .form-text textarea {
        height: 150px;
        border-radius: 30px;
        border: 1px solid white;
        width: 70%;
        resize: none;
        text-align: left;
        padding-left: 5px;
        padding-top: 20px;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .form-text input{
        width: 70%;
        margin-top: 20px;
        margin-bottom: 10px;
        border: 1px solid white;
        border-radius: 30px;
        height: 50px;
        text-align: left;
        padding-left: 5px;
    }

    .form-text label {
        font-size: 1.2em;
        text-align: left;
    }

    .new-course {
        /* display: flex; */
        background-color: white;
        width: 283px;
        height: 62px;
        border-radius: 40px;
        position: fixed;
        bottom: 0;
        margin: 50px 100px;
        border: 1px solid black;

    }
    .new-course a p{
        text-decoration: none;
        background-color: white;
        margin-top: 8%;
        margin-left: 8%;
        width: 90%;
        font-size: 1.2em;
        color: #32303F;
    }


</style>
<body>
    <div class="title">
        <h1>Add New Course</h1>
        <h4>Help us improve our website!</h4>
    </div>
    <div class="form-text">
        <form action="">
            <label for="">Course Title</label>
            <br><input type="text" placeholder="Course Title">

            <br><label for="">Course Subtitle</label>
            <br><textarea name="" id="" cols="30" rows="10"></textarea>

            <div class="records">
                <br><label for="">Content Title </label>
                <br><input type="text">
                <br><label for="">Content Material</label>
                <br><textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="new-course">
                <a class="extra-fields" href="#">
                    <p>Add More Fields</p>
                </a>
            </div>

            <div class="records_dynamic"></div>

        </form>
    </div>
</body>
<script>
    $('.extra-fields').click(function() {
    $('.records').clone().appendTo('.records_dynamic');
    $('.records_dynamic .records').addClass('single remove');
    $('.single .extra-fields').remove();
    $('.single').append('<br><a href="#" class="remove-field btn-remove-customer">Remove Fields</a>');
    $('.records_dynamic > .single').attr("class", "remove");

    $('.records_dynamic input').each(function() {
        var count = 0;
        var fieldname = $(this).attr("name");
        $(this).attr('name', fieldname + count);
        count++;
    });

    });

    $(document).on('click', '.remove-field', function(e) {
        $(this).parent('.remove').remove();
        e.preventDefault();
    });

</script>
</html>
