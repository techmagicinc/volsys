@extends('layouts.admin')

@section('body')


 <table align="center">
            <tr>
                {{$errors->first('time in')}}
                {{$errors->first('time out')}}
            </tr>
            <tr>
                <td>
                    {{Form::label('add', 'Add Day: ')}}
                    {{Form::text('time in','Time In')}}
                    {{Form::text('time out', 'Time Out')}}

                </td>
            </tr>
            <tr>
                 <td>
                    {{Form::label('delete', 'Delete Day: ')}}
                 </td>
            </tr>

        </table>

        <ul>
                @foreach($times as $time)
                    <li>{{ 'Sign In: '.$time->signin. ' Sign Out: '.$time->signout }}</li>
                @endforeach
                </ul>

@stop