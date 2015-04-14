@extends('layouts.admin')

@section('body')

{{Form::open(['route' => 'edittime.store'])}}
    <table align="center">
        <tr>

            <td align="right">
                {{Form::label('addtime', 'Add Time Worked: ')}}
            </td>
            <td>{{Form::label('addtimein', 'Sign In-')}}
                {{Form::select('addtimein' , array(
                                                    'Hour' => 'Hour',
                                                    '1:00'=> '1',
                                                    '2:00' => '2',
                                                    '3:00'=> '3',
                                                    '4:00' => '4',
                                                    '5:00'=> '5',
                                                    '6:00' => '6',
                                                    '7:00' => '7',
                                                    '8:00' => '8',
                                                    '9:00' => '9',
                                                    '10:00' => '10',
                                                    '11:00' => '11',
                                                    '12:00' => '12'

                                                    ))}}
                {{Form::select('addtimeinM' , array(
                                                    'Minute' => 'Minute',
                                                    '00:00'=> ':00',
                                                    '00:01' =>':01',
                                                    '00:02'=> ':02',
                                                    '00:03' =>':03',
                                                    '00:04'=> ':04',
                                                    '00:05' =>':05',
                                                    '00:06' =>':06',
                                                    '00:07' =>':07',
                                                    '00:08' =>':08',
                                                    '00:09' =>':09',
                                                    '00:10' =>':10',
                                                    '00:11' =>':11',
                                                    '00:12' =>':12'


                                                                    ))}}
            </td>
             <td>{{Form::label('addtimeout', 'Sign Out-')}}
                            {{Form::select('addtimeout' , array(
                                                                'Hour' => 'Hour',
                                                                '1:00'=> '1',
                                                                '2:00' => '2',
                                                                '3:00'=> '3',
                                                                '4:00' => '4',
                                                                '5:00'=> '5',
                                                                '6:00' => '6',
                                                                '7:00' => '7',
                                                                '8:00' => '8',
                                                                '9:00' => '9',
                                                                '10:00' => '10',
                                                                '11:00' => '11',
                                                                '12:00' => '12'

                                                                ))}}
                            {{Form::select('addtimeoutM' , array(
                                                                'Minute' => 'Minute',
                                                                '00:00'=> ':00',
                                                                '00:01' =>':01',
                                                                '00:02'=> ':02',
                                                                '00:03' =>':03',
                                                                '00:04'=> ':04',
                                                                '00:05' =>':05',
                                                                '00:06' =>':06',
                                                                '00:07' =>':07',
                                                                '00:08' =>':08',
                                                                '00:09' =>':09',
                                                                '00:10' =>':10',
                                                                '00:11' =>':11',
                                                                '00:12' =>':12'


                                                                                ))}}
                        </td>
            <td>
                {{Form::label('addtimecal', 'Date (in calandar view)')}}
                <br>
                <br>
            </td>
        </tr>

        <tr align="right">
            <td>
                {{Form::label('deltime','Remove Day Worked: ')}}
            </td>
            <td>
                {{Form::label('deltimecal', 'Date (in calandar view)')}}

            </td>
        </tr>

        <tr>
            <td align="right">
                {{Form::submit('Send')}}
            </td>
        </tr>

        </table>

         {{Form::close()}}

        <br>
        <br>
        <br>

        <h1>Table showing the different times volunteer worked</h1>

        //
        <br>
        <br>
        <br>


        //


@stop