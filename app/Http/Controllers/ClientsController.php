<?php

namespace App\Http\Controllers;

use App\Client;
use App\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function index()
    {
        $clients = Client::all();

    //    $types = ['Staff','Local','International'];
      //  return $clients;

   //     return response()->json(['clients'=>$clients,'type'=>$types],200);
       // return response()->json(['message'=>'clients not found'],404);

        //return redirect()->intended();

        // dd(redirect());

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

    public function store(Request $request)
    {
        //receives request

      //      dd($request->old('name'));

        $rules=[
            'name' => 'required|max:25',
            'phone'=>'regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
            'email'=>''
        ];

        $request->validate($rules);


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

        $rules=[
            'name' => 'required|max:25',
            'phone'=>'regex:/^[2-9]\d{2}-\d{3}-\d{4}$/',
            'email'=>''
        ];

        $request->validate($rules);
        
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
