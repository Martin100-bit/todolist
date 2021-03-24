<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MY TO DO LIST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <style>
            html, body {
    background-color: #fff;
    background-image: url("img_br.jfif");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: #636b6f;
    font-family: 'Nunito', sans-serif;
    font-weight: 200;
    margin: 1px;
    border: 1px;
    border-style: solid;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

.top-right {
    position: absolute;
    right: 10px;
    top: 18px;
}

.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 17px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: underline;
    text-transform: uppercase;
}

.m-b-md {
    margin-bottom: 30px;
}
footer{
    background: #eee;
    padding: 26px;
    text-align: center;
    font-size: 12px;
    font-type: Arial;
    font-style: italic;
    padding-top: 18px;
    margin-top: 25px;
}
body {
    font-family: 'Arial';
}
.btn{
    border: 2px solid black;
    background-color: white;
    color: black;
    padding: 14px 28px;
    font-size: 13px;
    cursor: pointer;
    border-radius: 5px;
    inline: block;
}
.info{
    border-color: #2196F3;
    color: dodgerblue
}
        </style>
    </head>
 <body>
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
        <footer>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
 </body>
 </html>
