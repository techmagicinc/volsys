@extends('layouts.volunteer')

@section('body')

    {{Form::open(['route' => 'admin.store'])}}

        <table align="center">
        <tr>
            <td align="right">
                {{Form::label('username', 'Username: ')}}



                {{Form::text('username')}}
            </td>
            <td>

                {{$errors->first('username')}}
            </td>
        </tr>
        <tr>
            <td align="right">
                {{Form::label('password', 'Password: ')}}



                {{Form::password('password')}}
            </td>
            <td>

                {{$errors->first('password')}}
            </td>
        </tr>
        <tr>
            <td align="right">
                {{Form::submit('Login')}}
            </td>
        </tr>
        </table>

    {{Form::close()}}

@stop