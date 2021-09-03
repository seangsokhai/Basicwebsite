@extends('layouts.app')

@section('content')
<h3>contact</h3>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '',['class' => 'form-control' , 'placeholder' => 'Your name' ] )}}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', '',['class' => 'form-control' , 'placeholder' => 'example@gmail.com' ] )}}
    </div>
    <div class="form-group">
        {{ Form::label('message', 'Massege') }}
        {{ Form::textarea('massage', '',['class' => 'form-control' , 'placeholder' => 'Your massage' ] )}}
    </div>
    {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}
{!! Form::close() !!}
@endsection