@extends('layouts.app')


@section('content')
        <h1>Create Client</h1>
        <div class="row">
            <div class="col-md-8">
                <form action="/clients" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="clientName">Name</label>
                        <input type="text" class="form-control" id="clientName" placeholder="Name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="clientPhone">Phone</label>
                        <input type="text" class="form-control" id="clientPhone" placeholder="Phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="clientEmail">Email</label>
                        <input type="text" class="form-control" id="clientEmail" placeholder="Email" name="email">
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
@endsection