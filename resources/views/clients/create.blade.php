@extends('layouts.app')


@section('content')
        <h1>Create Client</h1>
        <div class="row">
            <div class="col-md-8">
                {!! Form::open(['url' => '/clients','enctype'=>'multipart/form-data']) !!}
                    @include('clients._fields')

                    {{ Form::submit('Submit',['class'=>'btn btn-default']) }}

                    <a href="/clients" class="btn btn-primary">Back</a>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4"></div>
        </div>
@endsection