@extends('layouts.app')


                                    


@section('content')
@foreach($user as $use)

{{$use->name}}
<form action="/attendance/check/{{$use->id}}" method="POST">

                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

<button name="status" value="1" type="submit" class="btn btn-success">Geldi</button>
</form>
@endforeach

@stop