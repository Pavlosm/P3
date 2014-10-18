<?php

class LoremIpsumController extends BaseController {


    public function GetDefaultPage() {
        return View::make('LoremIpsum')->with('random', '');
    }


    public function GetResults() {

        // Get the data from the forms - no validation required based on the form input
        $paragraphs = Input::get('numberOfParagraphs');
        $extra_words = Input::get('additionalWords');
        $size = Input::get('inlineRadioOptions');

        //create a list of words
        $new_words = explode(',', $extra_words);

        // Create the generator to do its stuff
        $generator = new Badcow\LoremIpsum\Generator();

        $generator->addWords($new_words);

        // Make the paragraph length a bit less "random"
        $generator->setParagraphStDev(1.3);

        // Set the size of the paragraphs
        if($size == 'small'){
            $generator->setParagraphMean(2.0);
            $generator->setParagraphStDev(1.1); // larger value could end up in having one less paragraph
        }
        elseif ($size == 'large') {
            $generator->setParagraphMean(8.0);
        } else {
            $generator->setParagraphMean(4.0);
        }

        $paragraphs = $generator->getParagraphs(intval($paragraphs) +1 );

        // merge the array, format it and return it within the view
        $text  = implode('<p>', $paragraphs);

        return View::make('LoremIpsum')->with('random', $text);
    }


}