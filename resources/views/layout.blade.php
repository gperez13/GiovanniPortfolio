<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Giovanni Perez</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

          
            .center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .container{
                font-family: 'Nunito', sans-serif;
            }
            

        </style>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        


    </head>
    <body class="has-text-white">

        @yield('content')


        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue@2.2.1"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
