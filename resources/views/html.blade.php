<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <meta charset="utf-8">
        {{csrf_field()}}
        <title>{{ isset($title) ? $title : 'Тестовое задание' }}</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="/js/script.js"></script>
        <link href="/css/style.css" rel="stylesheet" >
    </head>
    <body>
        
        <div class="container">
            @include('page.menu')
            @include('page.bid_exist')
            @yield('content')
           
        </div>
    </body>
</html>
