@extends('layouts.default')

@section('content')
    <h1>Create a new Admin account</h1>

    @include('layouts.partials.errors')
    <div class="row">
        <div class="col-md-6">
            {{ Form::open(['route' => 'adminregistration_path']) }}

            <!-- Email Form Input -->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

            <!-- Password Form Input -->
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>
            <!-- Password_confirmation Form Input -->
            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password Confirmation:') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
            </div>

            {{ Form::close() }}
        </div>
    </div>
@stop