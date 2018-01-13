@extends('layouts.app')


@section('content')
        <h1>Edit Client</h1>
        <div class="row">
            <div class="col-md-8">

                {!! Form::model($client, ['route' => ['clients.update', $client->id],'method'=>'PUT']) !!}

                    @include('clients._fields')

                    {{ Form::submit('Submit',['class'=>'btn btn-default']) }}

                    <a href="/clients" class="btn btn-primary">Back</a>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4"></div>
        </div>
@endsection