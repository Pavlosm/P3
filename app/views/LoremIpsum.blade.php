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

        .select {
            max-width: 70px;
        }

    </style>
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
        Use the generator below to create paragraphs with random lorem ispum text which you can then copy and paste to
        use.
        <br />
        You can choose the number of paragraphs as well as the size of the paragraphs.
    </p>
    <h3>Generator</h3>
    <div class="app generator">
        <form role="form" method="POST">
            <div class="form-group">
                <label for="numberOfParagraphs">Choose Number of Paragraphs (max 9)</label><br />
                <select class="form-control select" id="numberOfParagraphs" name="numberOfParagraphs">
                    <option value="1" >1</option>
                    <option value="2" >2</option>
                    <option value="3" >3</option>
                    <option value="4" selected="selected">4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                    <option value="9" >9</option>
                </select>
            </div>

            <div class="form-group">
                <label for="additionalWords">Enter words that you want to include</label>
                <input type="text" class="form-control" id="additionalWords" placeholder="format comma separated ex:  aaa, bbb">
            </div>

            <label>Paragraph size</label><br />
            <div class="radio-inline">
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Small
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Medium
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Large
                </label>
            </div>
            <br /><br />

            <button type="submit" class="btn btn-primary">Generate text</button>
        </form>
    </div>
    <br />
    <h3>Random Text</h3>
    <div class="app results">

    </div>
    <br />
@stop


