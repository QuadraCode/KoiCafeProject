<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Koi Cafe</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default rounded borders and increase the bottom margin */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Remove the jumbotron's default bottom margin */
            .jumbotron {
                margin-bottom: 2;
            }

            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }
        </style>
    </head>
    <body>
        @include('header')
        <div class="jumbotron">
            <div class="container text-center">
                <h1>Koi Cafe</h1>
                <p>Sweet drinks with Chewy Bubble to Gain Your Mood</p>
            </div>
        </div>
        @yield('content')
        @include('footer')
    </body>
</html>
