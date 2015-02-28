@extends('layouts.volunteer')

@section('body')

    {{Form::open(['route' => 'Mail.store'])}}
        <table align="center">
            <tr>
                <td align = "left">

                    {{Form::label('vName', 'Volunteer: ')}}

                    {{Form::text('vName')}}

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