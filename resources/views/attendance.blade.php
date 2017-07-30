@extends('layouts.app')


                                    


@section('content')
@foreach($user as $use)

{{$use->name}}
@endforeach

@stop