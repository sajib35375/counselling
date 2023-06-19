@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Registration</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update.reg',$edit->id) }}" method="POST">
                            @csrf
                            <div class="my-3">
                                <label for="">Name</label>
                                <input name="name" value="{{ $edit->name }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Email</label>
                                <input name="email" value="{{ $edit->email }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Phone</label>
                                <input name="phone" value="{{ $edit->phone }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Location</label>
                                <input name="location" value="{{ $edit->location }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Age</label>
                                <input name="age" value="{{ $edit->age }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Gender</label>
                                <input class="form-control" {{ $edit->gender=='male'?'checked':'' }} name="gender" value="male" id="male" type="radio"><label for="male">Male</label>
                                <input class="form-control" {{ $edit->gender=='female'?'checked':'' }} name="gender" value="female" id="female" type="radio"><label for="female">Female</label>
                            </div>
                            <div class="my-3">
                                <input class="btn btn-success" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








@endsection
