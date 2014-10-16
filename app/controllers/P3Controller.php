<?php

/**
 * P3Controller is a controller class that has the information for
 * redirecting the input
 */
namespace Pmi\P3;


use View;
use BaseController;


class P3Controller extends BaseController
{
    public function show_index(){
        return View::make('index');
    }

    public function show_Lor_Ips(){
        return View::make('Loren_Ipsum_Generator');
    }

    public function show_User_Generator(){
        return View::make('User_Generator');
    }
}