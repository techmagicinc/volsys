@extends('layouts.admin')

@section('body')
    <section align="center">
        <h1>Volunteer's Name</h1>

        <br>

    {{Form::open(['route'=>'Volunteer.store'])}}
        <table align="center">
            <tr>
            {{$errors->first('first name')}}
            {{$errors->first('last name')}}
            {{$errors->first('category')}}
            </tr>
            <tr>
                <td>
                    {{Form::label('fName', 'First Name: ')}}
                    {{Form::text('first name',$emp->firstname)}}
                </td>
                <td>
                    {{Form::label('lName', 'Last Name: ')}}
                    {{Form::text('last name', $emp->lastname)}}
                </td>
                <td>
                    {{Form::label('category', 'Category: ')}}
                    {{Form::select('category' , array(
                                    '' => 'Choose One',
                                    'Medical Doctor'=> 'Medical Doctor',
                                    'Registered Nurse' => 'Registered Nurse'),
                                    'Registered Nurse')}}

                    {{Form::submit('Edit')}}

            </td>
            </tr>




        </table>
        <br>
        <br>
        <table align="center">
            <tr>
                <td>
                   {{ HTML:: link('edittime','Edit Time') }}
                </td>
            </tr>

        </table>
        <br>
        <br>




    </section>


@stop
