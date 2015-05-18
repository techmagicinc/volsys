@extends('layouts.volunteer')

@section('body')

    {{Form::open(['route' => 'Mail.store'])}} &nbsp; &nbsp; {{$errors->first('message')}}
    {{$errors->first('volunteer name')}}
        <table align="center">
            <tr>
                <td align = "left">

                    {{Form::label('vName', 'Volunteer: ')}}

                    {{Form::text('volunteer name')}}



                </td>
            </tr>

            <tr>
                <td>
                    {{Form::label('message','Message to admin')}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::textarea('message')}}

                </td>

            </tr>
            <tr>
                <td align="right">
                    {{Form::submit('Send')}}
                </td>
            </tr>

        </table>

    {{Form::close()}}
@stop