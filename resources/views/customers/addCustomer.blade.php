@extends('layouts.app')
@section('content')
 <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
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
                               @if(session('error'))
                               <div class="alert alert-danger">
                                {{ session('error') }}
                               </div>
                               @endif
                                <div class="panel panel-default">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel-heading"><h3 class="panel-title">Customer Information</h3></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <a href="" class="btn btn-sm btn-primary pull-right" style="margin-top: 14px; margin-right: 10px">All Customer</a>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <form role="form" action="" method="POST" enctype="multipart/form-data">

                                            @csrf
                            <!-- Basic example -->
                            <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="#########">
                                            </div>
                                        </div>
                                </div>
                                 <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="01**********">
                                            </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="address">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="experience">Experience</label>
                                                <input type="text" class="form-control" name="experience" id="experience" placeholder="Enter experience">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="n_id">NID</label>
                                                <input type="number" class="form-control" name="n_id" id="n_id" placeholder="n_id">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="salary">Salary</label>
                                                <input type="number" class="form-control" name="salary" id="salary" placeholder="salary">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="vacation">Vacation</label>
                                                <input type="text" class="form-control" name="vacation" id="vacation" placeholder="Enter vacation">
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" name="city" class="form-control" id="city" placeholder="Enter city">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" class="form-control" name="photo" id="photo">
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group"><input type="submit" value="Add" class="btn btn-primary" style="margin-bottom: 5px"></div>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                         <!-- col-->
                    </div>
</div>
@endsection
