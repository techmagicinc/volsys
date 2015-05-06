@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register!</h1>

            @include('layouts.partials.errors')

            {{ Form::open(['route' => 'register_path']) }}

            <!-- First Name Form Input -->
            <div class="form-group">
                {{ Form::label('firstName', 'First Name:') }}
                {{ Form::text('firstName', null, ['class' => 'form-control']) }}
            </div>

            <!-- Last Name Form Input -->
            <div class="form-group">
                {{ Form::label('lastName', 'Last Name:') }}
                {{ Form::text('lastName', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}
            </div>

            <!-- Category Form Input -->
            <div class="form-group">
                {{ Form::label('category', 'Category:') }}
                {{ Form::select('category', array(null => 'Please Select One', 'Administrator' => 'Administrator', 'Nurse' => 'Nurse', 'Doctor' => 'Doctor'), null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
            </div>


            {{ Form::close() }}
        </div>
    </div>
@stop