@extends('BaseTemplate')


@section('title')
    <title> Lorem Ipsum Generator</title>
@stop


@section('style')
    <link rel='stylesheet' href='styles/loremIpsum.css' type='text/css'>
@stop


@section('header')
    <h1>Lorem Ipsum Generator</h1>
@stop


@section('mainBody')
    <a href="/"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp; Homepage </a>
    &nbsp;|&nbsp;
    <a href="/Random_User_Generator">Random User Generator &nbsp;<span class="glyphicon glyphicon-circle-arrow-right"></span></a>
    <br /><br />
    <p>
        Use the generator below to create paragraphs with random lorem ispum style text, which you can then copy and
        paste to use.
    </p>
    <p>
        You can choose the number of paragraphs as well as the size of the paragraphs and you can add a list of words or
        phrases that you want to be displayed in the text (note: the separate word or phrases must be " , " separated).
    </p>
    <h3>Generator</h3>

    <div class="app generator">
        {{ Form::open(array('url'=>'/Lorem_Ipsum_Generator', 'method'=>'POST', 'role'=>'form')) }}

        <div class="form-group">
            {{ Form::label('numberOfParagraphs', 'Choose Number of paragraphs') }}
            {{ Form::select('numberOfParagraphs', [ '1', '2', '3', '4', '5', '6', '7', '8', '9' ], '4',
                             array('class' => 'form-control select')) }}
        </div>

        <div class="form-group">
            {{ Form::label('additionalWords', 'Enter words that you want to include') }}
            {{ Form::text('additionalWords', null,
                          array('class' => 'form-control users', 'placeholder' => 'word1, word2, etc')) }}
        </div>

        {{ Form::label('Enter words that you want to include') }}

        <div>
            {{ Form::label('inlineRadio1', 'Small', array('class' => 'radio-inline')) }}
            {{ Form::radio('inlineRadioOptions', 'small', true, array( 'id' => 'inlineRadio1')) }}

            {{ Form::label('inlineRadio2', 'Medium', array('class' => 'radio-inline')) }}
            {{ Form::radio('inlineRadioOptions', 'medium', false, array( 'id' => 'inlineRadio2')) }}

            {{ Form::label('inlineRadio3', 'Large', array('class' => 'radio-inline')) }}
            {{ Form::radio('inlineRadioOptions', 'large', false, array( 'id' => 'inlineRadio3')) }}
        </div>

        <br />

        {{ Form::submit('Generate text', array('class' => 'btn btn-primary')) }}

    </div>
    <br />
    <h3>Random Text</h3>
    <div class="app results">
        <p>{{ $random }}
    </div>
    <br />
@stop


