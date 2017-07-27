@extends('layouts.app')


@section('content')


  <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0"></h3>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/ruller/insert/"  method="POST" class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input name="time"  type="text" class="form-control form-control-line" value=""> </div>
                                        </div> 
                                       
                                    

                                         <div class="form-group">
                                            <label class="col-sm-12">Muellim</label>
                                            <div class="col-sm-12">
                                                <select name="teacher" class="form-control form-control-line">

                                                    @foreach($users as $user )
                                                    @if($user->type==7)
                                                    <option value="{{$user->id}}" >{{$user->name}}</option>
                                                    @endif
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>


                                         <div class="form-group">
                                            <label class="col-sm-12">Qrup</label>
                                            <div class="col-sm-12">
                                                <select name="group_id" class="form-control form-control-line">

                                                    @foreach($group as $grup )
                                                    <option value="{{$grup->id}}" >{{$grup->number}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Fenn</label>
                                            <div class="col-sm-12">
                                                <select name="subject" class="form-control form-control-line">

                                                    
                                                    <option>Xarici dil</option>
                                                    

                                                </select>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            
                                            <div class="col-sm-12">
                                                <input type="submit" value="Gonder" class="form-control form-control-line" placeholder="Helping text"> 
                                                 </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- ent layout -->


@endsection