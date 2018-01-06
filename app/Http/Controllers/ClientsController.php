<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function index()
    {
        $clients = ['fakhar','khan','ali','usama','ishfaq','aftab'];
        return view('clients.index',compact('clients'));
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store()
    {

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
