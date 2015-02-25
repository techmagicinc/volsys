@extends('layouts.volunteer')

@section('body')

    {{Form::open(['route' => 'Mail.store'])}}
        <table>
            <tr>
                <td align = "right">

                    {{Form::label('vName', 'Volunteer: ')}}
                </td>
                <td align = "right">
                    {{Form::text('vName')}}

                </td>
            </tr>
        </table>
        <br>
       <table>
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