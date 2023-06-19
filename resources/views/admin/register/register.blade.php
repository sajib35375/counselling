@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Registration Data</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>Location</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($all_data as $data)

                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->gender }}</td>
                                    <td>{{ $data->location }}</td>
                                    <td>{{ $data->age }}</td>
                                    <td>
                                        @if($data->status==true)
                                            <span class="badge badge-pill badge-success">approve</span>
                                        @else
                                            <span class="badge badge-pill badge-warning">pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($data->status==false)
                                            <a class="btn btn-sm btn-success" href="{{ route('status.active',$data->id) }}">approve</a>
                                        @else
                                            <a class="btn btn-sm btn-warning" href="{{ route('status.inactive',$data->id) }}">pending</a>
                                        @endif
                                        <a class="btn btn-sm btn-primary" href="{{ route('edit.reg',$data->id) }}">Edit</a>
                                        <a id="delete" class="btn btn-sm btn-danger" href="{{ route('delete.reg',$data->id) }}">Delete</a>
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











@endsection
