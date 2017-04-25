<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function index()
    {
        return view('clients/index', [] );
    }
}
