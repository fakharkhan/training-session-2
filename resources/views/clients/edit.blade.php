@extends('layouts.app')


@section('content')
        <h1>Edit Client</h1>
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(['url' => 'clients/'.$client->id,'method' => 'put']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('name', 'Client Name') }}
                        {{ Form::text('name',$client->name,['class'=>'form-control','placeholder'=>'Client Name']) }}
                    </div>

                    <div class="form-group">
                        <label for="clientPhone">Phone</label>
                        {{ Form::text('phone',$client->phone,['class'=>'form-control','placeholder'=>'Client Phone']) }}
                    </div>

                    <div class="form-group">
                        <label for="clientEmail">Email</label>
                        {{ Form::text('email',$client->email,['class'=>'form-control','placeholder'=>'Client Email']) }}
                    </div>

                    {{ Form::submit('Submit',['class'=>'btn btn-default']) }}

                    <a href="/clients" class="btn btn-primary">Back</a>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4"></div>
        </div>
@endsection