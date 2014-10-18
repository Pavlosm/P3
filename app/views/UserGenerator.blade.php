@extends('BaseTemplate')


@section('title')
    <title> Lorem Ipsum Generator</title>
@stop


@section('style')
    <link rel='stylesheet' href='styles/randomUser.css' type='text/css'>
@stop


@section('header')
    <h1>Lorem Ipsum Generator</h1>
@stop


@section('mainBody')
    <a href="/"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp; Homepage </a>
    &nbsp;|&nbsp;
    <a href="/Lorem_Ipsum_Generator">Lorem Ipsum Generator &nbsp;<span class="glyphicon glyphicon-circle-arrow-right"></span></a>
    <br /><br />
    <p>
        Use the generator below to create random user profiles that include a name and a surname, an email, and
        optionally an address and a date of birth. Additionally there are three available formats for the output:
    </p>
    <p>
        <dl>
            <dt>sequence of fields </dt>
            <dd><small><i>[first name], [last name], [email], [date of birth (optional)], [address (optional)]</i></small></dd>
            <dt>plain text format (csv style)</dt>
            <dd><small><i> {{ $plain_user }} </i></small></dd>
            <dt>formatted text format</dt>
            <dd><small><i> {{ $formatted_user }} </i></small></dd>
            <dt>json format</dt>
            <dd><small><i> {{ $json_user }} </i></small></dd>
        </dl>
    </p>

    <h3>Generator</h3>
    <div class="app generator">

        {{ Form::open(array('url'=>'Random_User_Generator', 'method'=>'POST', 'role'=>'form')) }}

            <div class="form-group">
                {{ Form::label('numberOfUsers', 'Choose number of users (max 30)') }}
                {{ Form::text('numberOfUsers', null, array('class' => 'form-control users', 'placeholder' => 'ex 5')); }}
            </div>
            @if ($errors->has('numberOfUsers')) <p class="error">{{ $errors->first('numberOfUsers') }}</p> @endif

            <hr style="background:#cccbca; border:0; height:1px" />

            <div class="checkbox">
                {{ Form::label('dob', 'Add a date of birth') }}
                {{ Form::checkbox('dob', 'yes') }}
            </div>

            <hr style="background:#cccbca; border:0; height:1px" />

            <div class="checkbox">
                            {{ Form::label('address', 'Add an Address') }}
                            {{ Form::checkbox('address', 'yes') }}
            </div>

            <hr style="background:#cccbca; border:0; height:1px" />

            <div class="form-group">
                {{ Form::label('dataFormat', 'Choose data format') }}
                {{ Form::select('dataFormat', [ 'formatted/text' => 'formatted text',
                                                'plain/text' => 'plain text',
                                                'json' => 'json'], 'formatted/text',
                                                array('class' => 'form-control select')) }}
            </div>

            {{ Form::submit('Generate User(s)', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>
    <br />
    <h3>Random Users</h3>
    <div class="app results">
        @foreach($results as $res)
            {{ $res }}
            <hr style="background:#cccbca; border:0; height:1px" />
        @endforeach

    </div>
    <br />
@stop


