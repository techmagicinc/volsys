@extends('layouts.admin')

@section('body')

{{ HTML::link('/Logout','logout')}}
{{Form::open(['route'=>'edit.store'])}}
<table>
    <tr>
        <td>
        {{Form::token()}}

        {{Form::label('search', 'Search: ')}}

        {{Form::text('keyword','Search',array('id'=>'keyword'))}}
         </td>
         <td>
         {{Form::label('category', 'Category: ')}}

         {{Form::select('category', array(
                                    'choose' => 'Choose One',
                                    'MD'=> 'Medical Doctor',
                                    'RN' => 'Registered Nurse'
                                    ))}}
         </td>
         <td>
            {{Form::submit('Search')}}
         </td>
    </tr>

</table>
{{Form::close()}}
<br>
<br>
<table>
    <tr>
        <td>
        Yesterday's volunteers


        [results with create]
        </td>
    </tr>

</table>



@stop