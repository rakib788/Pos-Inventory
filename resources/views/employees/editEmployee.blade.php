@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container">
                         <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">General elements</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li class="active">General elements</li>
                                </ol>
                            </div>
                        </div>
                              @if(session('message'))
                               <div class="alert alert-success">
                                 {{ session('message') }}
                              </div>
                               @endif
                        <div class="panel panel-default">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel-heading"><h3 class="panel-title">Employee Information</h3></div>
                                 </div>
                                <div class="col-md-6 form-group">
                                    <a href="{{ route('allEmployee') }}" class="btn btn-sm btn-primary pull-right" style="margin-top: 14px; margin-right: 10px">All Employee</a>
                                </div>
                            </div>
                                    
            <div class="panel-body">
                <form action="{{ route('updateEmployee',$editEmployee->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" value="{{ $editEmployee->name }}" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ $editEmployee->email }}" id="email" class="form-control">
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ $editEmployee->email }}" id="phone" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ $editEmployee->address }}" id="address" class="form-control">
                        </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="experience">Experiense</label>
                                <input type="text" name="experience" class="form-control" value="{{$editEmployee->experience}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="n_id">NID No</label>
                                <input type="text" class="form-control" name="n_id" value="{{$editEmployee->n_id}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="salary">Salary</label>
                                <input type="text" class="form-control" name="salary" value="{{$editEmployee->salary}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="vacation">Vacation</label>
                                <input type="text" class="form-control" name="vacation" value="{{$editEmployee->vacation}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" value="{{$editEmployee->city}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="photo">Upload New Photo</label>
                                <input type="file" class="form-control" name="photo" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Old Photo</label>
                                <img src="{{URL::to($editEmployee->photo)}}" alt="" style="height: 80px; width:80px">
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Update" class="btn btn-primary text-light pull-right" style="margin-right: 7px">
                        </div>
                        <hr>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
     </div>
</div>
@endsection
