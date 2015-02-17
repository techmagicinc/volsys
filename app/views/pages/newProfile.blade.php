@extends('layouts.volunteer')

@section('body')
    <section align="center">
        <h1>Create New Volunteer Profile</h1>
        <table align="center">
            <tr>
                <td>
                    <b align="left", ><font size="5">Welcome</font><b>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Please give us all the information needed to get started!!!</b>
                </td>
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td>
                    {{Form::label('fName', 'First Name: ')}}
                    {{Form::text('fName')}}
                </td>
                <td>
                    {{Form::label('category', 'Category: ')}}
                    {{Form::select('category' , array(
                                    'choose' => 'Choose One',
                                    'MD'=> 'Medical Doctor',
                                    'RN' => 'Registered Nurse'
                                    ))}}
                </td>
            </tr>
            <tr>
                <td>
                    {{Form::label('lName', 'Last Name: ')}}
                    {{Form::text('lName')}}
                </td>
                <td align="right">
                    {{Form::submit('Create')}}
                </td>
            </tr>

        </table>
    </section>
@stop
