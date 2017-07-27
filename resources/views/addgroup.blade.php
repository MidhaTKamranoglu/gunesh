@extends('layouts.app')


@section('content')


  <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">ad soyad</h3>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/group/insert/" enctype="multipart/form-data" method="POST" class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input name="name" type="text" class="form-control form-control-line">
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