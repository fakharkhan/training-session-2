@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    {{ Form::label('name', 'Client Name') }}
    {{ Form::text('name',$client->name,['class'=>'form-control','placeholder'=>'Client Name']) }}
</div>

<div class="form-group">
    <label for="clientPhone">Phone (xxx-xxx-xxxx)</label>
    {{ Form::text('phone',$client->phone,['class'=>'form-control','placeholder'=>'xxx-xxx-xxxx']) }}
</div>

<div class="form-group">
    <label for="clientEmail">Email</label>
    {{ Form::text('email',$client->email,['class'=>'form-control','placeholder'=>'Client Email']) }}
</div>

<div class="form-group">
    <label for="clientEmail">Image</label>
    {{ Form::file('image') }}
</div>