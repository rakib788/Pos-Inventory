@extends('layouts.app')
@section('content')
<div class="content">
<div class="container">
<div class="row mt">
        <div class="col-lg-8">
            <div class="panel">
                    <div class="row">
                       <div class="panel-heading">
                        <div class="col-lg-6"><div class="panel-title"><h4> Employee</h4></div></div>
                        <div class="col-lg-6">
                            <a href="{{ route('allEmployee') }}" class=" btn btn-sm btn-primary pull-right" style="margin-right: 7px; margin-top: 12px">All Employee</a>
                        </div>
                        </div> 
                    </div>
                    <hr>
                    <div class="text-center">
                        <img src="{{URL::to($viewEmployee->photo)}}" style="height:150px; width:150px;" alt="">
                    </div>
                    <hr>
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{ $viewEmployee->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $viewEmployee->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $viewEmployee->phone }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $viewEmployee->address }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $viewEmployee->city }}</td>
                        </tr>
                   </table>
                </div>
            </div>       
        </div>
    </div>
</div>
@endsection

