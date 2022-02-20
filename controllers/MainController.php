<?php

namespace app\controllers;

use speedweb\core\Application;
use speedweb\core\Controller;
use speedweb\core\http\Request;

class MainController extends Controller
{

    public function home(Request $request)
    {
        return view('home');
    }
}