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
        $client = new Client();
        $client->phone ='+92';
        return view('clients.create',compact('client'));
    }

    public function store(Request $request)
    {
        //receives request
       // $data = $request->all();

       // $data['phone'] = '+92'.$data['phone'];

        Client::create($request->all());

        return redirect()->to('clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }


    public function update(Request $request,$id)
    {
        $client = Client::find($id);

        $client->update($request->all());

        return redirect()->to('clients');
    }



    public function destroy()
    {

    }



}
