@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="wrap" style="margin: 30px;">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h2>All Slider</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_slider as $slider)
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td><img style="height: 100px;width: 100px;" src="{{ URL::to('') }}/admin/images/{{ $slider->photo }}" alt=""></td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('slider.edit',$slider->id) }}">Edit</a>
                                    <a id="delete" class="btn btn-danger" href="{{ route('slider.delete',$slider->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Slider</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <label for="">Photo</label>
                            <img id="img" src="" alt="">
                            <input name="photo" class="form-control-file" type="file">
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


<script>
    $(document).ready(function (){
        $(document).on('change','input[name="photo"]',function (e){
            e.preventDefault();
            let url = URL.createObjectURL(e.target.files[0]);
            $('img#img').attr('src',url).width('100px').height('100px');
        })
    })
</script>
@endsection
