@extends('layouts.volunteer')

@section('body')

    <table>
        <tr>
            <td align = "right">

                {{Form::label('vName', 'Volunteer: ')}}
            </td>
            <td align = "right">
                {{Form::text('vName')}}

            </td>
        </tr>
        <tr>
            <td align = "right">

                {{Form::label('subject', 'Subject: ')}}
            </td>
            <td align = "right">
                {{Form::text('subject')}}
            </td>
        </tr>
    </table>
    <br>
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



@stop