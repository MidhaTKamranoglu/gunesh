@extends('layouts.app')

@section('content')
@if($parent->student_kart==null)
 <form action="/parent/update" method="POST"  class="form-horizontal form-material">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="col-md-12">Kart Id</label>
                                            <div class="col-md-12">
                                                <input name="kart_id" type="text" placeholder=""> 
                                                <input type="submit" value="gonder"> 

                                                </div>
                                        </div>
</form>
@else
Bazada olan telebeler
<a href="/student/{{$student->id}}">Telebe</a>
@endif
<br>
{{Auth::user()->id}}
@endsection

