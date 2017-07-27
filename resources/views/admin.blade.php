@extends('layouts.app')


@section('content')

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Bütün İstifadəçilər</h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Primary Table</h3>
                           
                            <div class="table-responsive">
                                <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>AD SOYAD</th>
                                            <th>Elektron Poçt</th>
                                            <th>Username</th>
                                            <th>Vəzifəsi</th>
                                            <th></th>
                                            <th></th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $user)

                                        <tr>
                                     
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>@ {{$user->username}}</td>
                                            <td>
                                            @if($user->type==4)
                                            Baş Admin
                                            @endif

                                            @if($user->type==3)
                                            Reseption
                                            @endif

                                            @if($user->type==1)
                                            Telebe
                                            @endif

                                            @if($user->type==2)
                                            Valideyn
                                            @endif
                                            </td>
                                            <td>
                                            <a href="/user/edit/{{$user->id}}">
                                            Redakte Et
                                            </a>
                                            </td>
                                             <td>
                                            <a href="/user/delete/{{$user->id}}">
                                           
                                       Sil
                                        </a>
                                        </td>
                                        </tr>
                                        

                                            @endforeach
                                 	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>


@stop