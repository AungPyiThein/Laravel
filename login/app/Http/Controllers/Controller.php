
<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
     return view('login');
    }
}
