@extends('layouts.app')


@section('content')


  <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">ad soyad</h3>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/user/insert/" enctype="multipart/form-data" method="POST" class="form-horizontal">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input name="name" type="text" class="form-control form-control-line"> </div>
                                        </div> 
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input name="username"  type="text" class="form-control form-control-line" value="ad soyad"> </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-12" for="example-email">ElektronPoçt <span class="help"> e.g. "example@gmail.com"</span></label>
                                            <div class="col-md-12">
                                                <input  type="email" id="example-email2" name="email" class="form-control form-control-line" placeholder="Email"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Şifrə</label>
                                            <div class="col-md-12">
                                                <input name="password" type="password" class="form-control form-control-line" value="password"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Mobile</label>
                                            <div class="col-md-12">
                                                <input name="mobile"  type="text" class="form-control form-control-line" placeholder="placeholder"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Haqqinda </label>
                                            <div class="col-md-12">
                                                <textarea name="about" class="form-control form-control-line" rows="5">
                                                    
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Vəzifə</label>
                                            <div class="col-sm-12">
                                                <select name="type" class="form-control form-control-line">

                                                	 @if(Auth::user()->type==3)
                                                    <option value="1">Tələbə</option>
                                                    <option value="2">Valideyin</option>
                                                    <option value="0">Qonaq</option>
                                                    @endif

                                                    @if(Auth::user()->type==6)
                                                    <option value="1">Tələbə</option>
                                                    <option value="2">Valideyin</option>
                                                    <option value="3">Reseption</option>
                                                    <option value="0">Qonaq</option>
                                                    <option value="7">Muellim</option>
                                                    @endif
                                                    @if(Auth::user()->type==4)
                                                    <option value="1">Tələbə</option>
                                                    <option value="2">Valideyin</option>
                                                    <option value="3">Reseption</option>
                                                    <option value="5">SMM</option>                                          
                                                    <option value="0">Qonaq</option>
                                                    <option value="6">Filial Rehberi</option>
                                                    <option value="7">Muellim</option>
                                                    @endif
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
                                            <label class="col-sm-12">Şəkil Yüklə</label>
                                            <div class="col-sm-12">
                                                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                    <div class="form-control form-control-line" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Dəyiş</span>
                                                    <input type="file" name="img"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Sil</a> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Doğum Tarixi </label>
                                            <div class="col-sm-12">
                                                <input type="date"  name="date" class="form-control form-control-line" placeholder="Helping text"> 
                                                <span class="help-block"><small>Məlumatları Yadda Saxlamaq Üçün Göndər  Düyməsini Sıx.</small></span> </div>
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