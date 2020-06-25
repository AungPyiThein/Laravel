<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index()
    {
        return ['name'=>'anil sidhu'];
    }
    function show($id)
    {
        echo 'Hello From the Controller ' . $id;
    }
}
