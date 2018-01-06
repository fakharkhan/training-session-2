<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function index()
    {
        $clients = Client::all();
        return view('clients.index',compact('clients'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        //receives request
        $data = $request->all();
       // dd($data['name']);
        return $data;
    }

    public function edit()
    {

    }


    public function update()
    {


    }



    public function destroy()
    {

    }



}
