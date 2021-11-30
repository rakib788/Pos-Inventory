    @extends('layouts.app')
    @section('content')
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Datatable</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="panel-heading"><h3 class="panel-title">All Employee</h3></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <a href="{{ route('addEmployee') }}" class="btn btn-sm btn-primary pull-right" style="margin-top: 14px; margin-right: 10px"><i class="fa fa-plus"></i> Add</a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Address</th>
                                                            <th>Photo</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($employee as $key=>$row)
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $row->name }}</td>
                                                            <td>{{ $row->email }}</td>
                                                            <td>{{ $row->phone }}</td>
                                                            <td>{{ $row->address }}</td>
                                                            <td>
                                                                <img src="{{URL::to($row->photo)}}" style="height: 60px; width:60px" alt="">
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('editEmployee',$row->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                                                <a href="{{ route('deleteEmployee',$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                                <a href="{{ route('viewEmployee',$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->

                    </div> <!-- container -->
                               
                </div> <!-- content -->

    @endsection
