<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @yield('title', 'CSCIE-15 P3 - pmi')

    <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" ></script>

    <style>
        .footer {
            background-color: #14263d;
            border-color: #14263d;
            padding: 15px;
            color: #ebebeb;
            border-radius: 5px;
        }
    </style>


    @yield('style')

</head>
<body>
    <div class="container" id="header">
        @yield('header')
    </div>
    <div class="container" id="mainBody">
        @yield('mainBody')

        <div class="footer">
            <h5>Links to projects:</h5>
            <span class="glyphicon glyphicon-hand-right"></span>
            <a href="http://p1.cpmi.ninja"> Project 1</a> &nbsp;&nbsp;&nbsp;
            <span class="glyphicon glyphicon-hand-right"></span>
            <a href="http://p2.cpmi.ninja"> Project 2</a> &nbsp;&nbsp;&nbsp;
            <span class="glyphicon glyphicon-hand-right"></span>
            <a href="http://p4.cpmi.ninja"> Project 4</a>
        </div>
    </div>
</body>
</html>