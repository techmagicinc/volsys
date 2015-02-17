@extends('layouts.volunteer')

@section('body')
    {{Form::open()}}

    <section align="center">
            <h1>Administration Login</h1>
        <div>

            {{Form::label('adminID', 'Admin ID: ')}}
            {{Form::text('adminID')}}
        </div>
        <br>
        <div>
            {{Form::label('password','Password: ')}}
            {{Form::text('password')}}
        </div>
        <br>
        <div>{{Form::submit('Login')}}</div>
        <br>
        <a href="/SignIn">Volunteer Sign in</a>
    </section>

    {{Form::close()}}


@stop