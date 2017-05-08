<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client as Client;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{
    function index()
    {
        $client = new Client();
        $data = [];
        $data['clients'] = $client->all();
        return view('clients/index', $data );
    }

    function newClient()
    {
        return view('clients/form', [] );
    }

    function show( $id )
    {
        return view('clients/form', [] );
    }
}
