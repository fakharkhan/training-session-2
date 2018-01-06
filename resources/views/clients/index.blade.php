

@extends('layouts.app')

@section('content')
<h1>List of Clients</h1>


<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
    </tr>

    @foreach($clients as $client)
    <tr>
        <td>{{ $client }}</td>
    </tr>
    @endforeach
</table>
@endsection