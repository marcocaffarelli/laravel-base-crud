<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-base-crud</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .active{
                color: red;
            }
            h1, nav{
                text-align: center;
            }
        </style>
    </head>
<body>
    <header>
        <h1>LARAVEL BASE CRUD</h1>
            <nav>
                <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
                <a href="{{ route('blog') }}" class="{{Route::currentRouteName() === 'blog' ? 'active' : '' }}">BLOG</a>
            </nav>
    </header>
</body>
</html>