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
        $clients = new Client();

      //  $clients = $clients->orderBy('id')->get()->sortBy('name');

        $clients = $clients->all();

        //$clients = $clients->where('id',1)->get();

      //  $clients = $clients->where('id',1)->get()->where('id', 2);

      //  $clients = $clients->all()->sortBy('name');

      //  $types = ['Staff','Local','Foreigner'];

     //   $types = collect($types); //convert array into collection

    //    dd($types);

      //  dd(new Client(),$clients, (new Client())->all());


      //  return $clients;

      // $clients = $clients->chunk(2);

    //    return $clients;

        return view('clients.index',compact('clients'));
    }

    public function show()
    {

    }

    public function create()
    {
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
