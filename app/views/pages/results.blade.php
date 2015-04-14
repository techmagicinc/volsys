@extends('layouts.admin')

@section('body')


    @if(!$results->results)
        <p>Nothing found, please try another search.</p>
    @else
        <ul>
            @foreach($results->results as $result)
                <li>
                    {{HTML::link-to-route('Volunteer',$result->fname, $result->id)}}

                </li>
            @endforeach
        </ul>
@stop