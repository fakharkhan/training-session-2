

@extends('layouts.app')

@section('content')
<h1>List of Clients</h1>


<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Action</td>
    </tr>

    @foreach($clients as $client)
    <tr>
        <td>{{ $client->name }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->email }}</td>

        <td><a href="/clients/{{ $client->id }}/edit">Edit</a></td>
    </tr>
    @endforeach
</table>

<a href="/clients/create" class="btn btn-primary">Create</a>
@endsection