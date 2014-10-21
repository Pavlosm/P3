@extends('BaseTemplate')


@section('title')
    <title>P3 Homepage</title>
@stop


@section('style')
    <link rel='stylesheet' href='styles/homepage.css' type='text/css'>
@stop


@section('header')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PavlosMi - CSCIE-15 P3</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project portfolio <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><a href="http://p1.cpmi.ninja">P1</a></a></li>
                            <li><a href="#"><a href="http://p2.cpmi.ninja">P2</a></a></li>
                            <li><a href="#"><a href="http://p4.cpmi.ninja">P4</a></a></li>
                         </ul>
                    </li>
                    <li><a href="/Lorem_Ipsum_Generator">Lorem Ipsum Generator</a></li>
                    <li><a href="/Random_User_Generator">Random User Generator</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@stop

@section('mainBody')
    <h3>P3 Description</h3>
    <p>
        This is the landing page for P3 project for the CSCIE-15. P3 includes two helpful web-applications for
        developers. The first is a Lorem Ipsum text-paragraph generator and the second one is a random user generator.
        You can find more information in the section below and you can visit the web-applications to try them yourself.
    </p>

    <a class="TitleLink" href="/Lorem_Ipsum_Generator"><h3>Lorem Ipsum Generator</h3></a>
    <p>
        Lorem ipsum is a pseudo latin text that is widely used as content of web-pages for display purposes and testing
        the visual appearance of the web-page.
    </p>
    <p>
        The Lorem Ipsum generator is a web application that creates pseudo latin paragraphs according to the user
        specifications. The user can define the number of paragraphs, as well as the size of paragraphs and can add any
        additional words or phrases that will be included in the text.
    </p>
    <p>
        The paragraphs are created using the external package:
        <a href="https://packagist.org/packages/badcow/lorem-ipsum">badcow/lorem-ipsum</a>.
    </p>

    <a href="/Lorem_Ipsum_Generator"><div class="image">
        {{ HTML::image('Images/LoremIpsum.png', $alt='lorem ipsum generator') }}
    </div></a>


    <a class="TitleLink" href="/Random_User_Generator"><h3>Random User Generator</h3></a>
    <p>
        The random user generator is another helpful generator for developers. This app creates random users with name,
        email address and optional date of birth and address. The application provides three data formats for the
        created users to assist developers; a basic text representation in a csv style format, a formatted text
        representation (more user friendly) and a .json format.
    </p>
    <p>
        The user data are created mostly using the external package:
        <a href="https://packagist.org/packages/fzaninotto/faker">fzaninotto/faker</a>.
    </p>
    <a href="/Random_User_Generator"><div class="image">
        {{ HTML::image('Images/RandomUser.png', $alt='random user generator') }}
    </div> </a>

    <br />
@stop
