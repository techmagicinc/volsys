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
                    {{Form::text('first name','Populated name')}}
                </td>
                <td>
                    {{Form::label('lName', 'Last Name: ')}}
                    {{Form::text('last name', 'Populated name')}}
                </td>
                <td>
                    {{Form::label('category', 'Category: ')}}
                    {{Form::select('category' , array(
                                    '' => 'Choose One',
                                    'MD'=> 'Medical Doctor',
                                    'RN' => 'Registered Nurse'
                                    ))}}


            </td>
            </tr>
        </table>
        <br>
        <br>
        <table align="center">
            <tr>
                <td>
                    Volunteer's recent times
                </td>
            </tr>

        </table>
        <br>
        <br>
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
             <tr>
                <td align="right">
                    {{Form::submit('Edit')}}
                </td>
             </tr>

        </table>


         </td>


    </section>

    NEED TO FIX THE TEXT FIELDS ALWAYS NOT VALIDATING
@stop
