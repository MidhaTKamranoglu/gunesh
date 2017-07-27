@extends('layouts.app')

@section('content')
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
{{Auth::user()->type}}
@endsection

