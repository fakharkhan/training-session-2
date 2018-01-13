<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\ClientFormRequest;
use App\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function index()
    {

     //   session()->put('hidden_price',500);

        $clients = Client::all();

        return view('clients.index',compact('clients'));
    }

    public function show()
    {

    }

    public function create()
    {
     //   return session()->get('hidden_price');
        $client = new Client();

        return view('clients.create',compact('client'));
    }

    public function store(ClientFormRequest $request)
    {
        //receives request


        Client::create($request->all());
        
        return redirect()->to('clients');
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit',compact('client'));
    }


    public function update(ClientFormRequest $request,$id)
    {

        $client = Client::find($id);

        $client->update($request->all());

        return redirect()->to('clients');
    }



    public function destroy($id)
    {
         Client::find($id)->delete();
        return redirect()->to('clients');
    }



}
