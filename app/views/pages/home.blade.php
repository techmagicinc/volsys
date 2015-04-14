@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to the Volunteer Management System!</h1>
        <p>Please log in before starting work. If you haven't registered yet, please do so!</p>
        {{--@if ( ! $currentUser)--}}
            <p>
                {{ link_to_route('register_path', 'Sign Up!', null, ['class' => 'btn btn-lg btn-primary']) }}

            </p>
        {{--@endif--}}
    </div>
@stop