

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

    @foreach(clients() as $client)
    <tr>
        <td>{{ $client->name }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->email }}</td>

        <td style="display: inline-flex">
            {{--<a href="{{ route('clients.edit',$client->id) }}">Edit</a> |--}}
            {!! link_to_route('clients.edit', 'Edit',[$client->id],['class'=>'btn btn-info']) !!}

            {!! Form::open(['route' => ['clients.destroy',$client->id],'method' => 'DELETE']) !!}
                {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>

<a href="/clients/create" class="btn btn-primary">Create</a>
@endsection