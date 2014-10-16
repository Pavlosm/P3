@extends('BaseTemplate')

@section('title')
    <title> Lorem Ipsum Generator</title>

    <style type="text/css">
        #header {
            background-color: #14263d;
            border-color: #14263d;
            padding-bottom: 5px;
            color: #ebebeb;
            border-radius: 5px;
        }
        #mainBody{
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 25px;
        }

        .app {
            padding: 15px;
            background-color: #ececec;
            max-width: 500px;
            border-radius: 10px;
            border-color: #ececec;
            border-bottom-style: solid;
            -webkit-box-shadow: 0 10px 6px -6px #777;
            -moz-box-shadow: 0 10px 6px -6px #777;
            box-shadow: 0 10px 6px -6px #777;
        }

        .generator{
            max-width: 500px;
        }

        .results {
            max-width: 1000px;
        }

        .users {
            max-width: 70px;
        }

        .select {
            max-width: 120px;
        }

    </style>
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
        Use the generator below to create random user profiles that include:
        <ul>
            <li>name</li>
            <li>surname</li>
            <li>username</li>
            <li>password</li>
            <li>date of birth (optional)</li>
        </ul>

    </p>
    <p>
        Additionally, to provide a more useful service the data can be displayed in one of the two formats:
        <ul>
            <li>plain text format</li>
            <li>json format</li>
        </ul>
    </p>

    <h3>Generator</h3>
    <div class="app generator">
        <form role="form" method="POST">
            <div class="form-group">
                <label for="numberOfUsers">Choose number of users (max 30)</label><br />
                <input type="text" class="form-control users" id="numberOfUsers" placeholder="ex 5">
            </div>
            <hr style="background:#cccbca; border:0; height:1px" />
            <div class="checkbox">
                <label>
                    <input type="checkbox"> <h4>Add a date of birth</h4>
                </label>
            </div>
            <hr style="background:#cccbca; border:0; height:1px" />
            <div class="form-group">
                <label for="dataFormat">Choose data format</label><br />
                <select class="form-control select" id="dataFormat" name="dataFormat">
                    <option value="1" selected="selected">plain text</option>
                    <option value="2" >json</option>
                </select>
            </div>
            <hr style="background:#cccbca; border:0; height:1px" />
            <button type="submit" class="btn btn-primary">Generate users</button>
        </form>
    </div>
    <br />
    <h3>Random Users</h3>
    <div class="app results">
        <p>
            Name: Adam <br />
            Surname: Scot <br />
            Username: username <br />
            Password: 12dfjdf <br />
            Birth date: 29/03/2012 <br />
        </p>
        <hr style="background:#ff8d00; border:0; height:1px" />
        <p>
            Name: Adam <br />
            Surname: Scot <br />
            Username: username <br />
            Password: 12dfjdf <br />
            Birth date: 29/03/2012 <br />
        </p>
        <hr style="background:#ff8d00; border:0; height:1px" />
        <p>
            Name: Adam <br />
            Surname: Scot <br />
            Username: username <br />
            Password: 12dfjdf <br />
            Birth date: 29/03/2012 <br />
        </p>
    </div>
    <br />
@stop


