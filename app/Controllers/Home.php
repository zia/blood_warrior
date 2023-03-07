<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //$db = \Config\Database::connect();
        //echo '<pre>';
        //print_r($db);
        //die();
        return view('welcome_message');
    }
}
