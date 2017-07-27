@extends('layouts.app')


@section('content')

    <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4> </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">1 ci gün üçün Dərs Cədvəli </h3>
                           
                            <div class="table-responsive">
                                <table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            
                                            <th>Müəllimin Adı</th>
                                            <th>Fənnin Adı</th>
                                            <th>Dərs Saatı</th>
                                            <th></th>

                                           
                                           



                                        </tr>
                                    </thead>
                                    <tbody>

                                    
                                    @foreach($ruller as $rule)
                                        <tr>
                                     
                                            <td>{{$rule->teacher}}</td>
                                            <td>{{$rule->subject}}</td>
                                            <td>{{$rule->time}}</td>
                                            <td><a href="/attendance/{{$rule->group_id}}">Davamiyyet</a></td>

                                            
                                         
                                        
                                        </tr>


                                        @endforeach
                                 	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>


@stop