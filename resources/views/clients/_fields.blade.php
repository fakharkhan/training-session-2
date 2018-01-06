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