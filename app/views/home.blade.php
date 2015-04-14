@extends('layouts.volunteer')

@section('body')

{{ HTML::link('Logout','logout')}}
<br>
{{ HTML::link('edit','maintenance')}}
<br>
{{ HTML::link('Volunteer','volunteer')}}

@stop