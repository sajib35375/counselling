@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="wrap" style="margin: 30px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Update Header Image</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('header.image.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <label for="">Header Image</label>
                            <input name="old_photo" value="{{ $header_data->photo }}" type="hidden">
                            <input name="photo" class="form-control-file" type="file">
                        </div>
                        <div class="my-3">
                            <input class="btn btn-success" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h2>Header Image</h2>
                <div class="card-body">
                    <img id="img" style="height: 270px;width: 1430px;" src="{{ URL::to('') }}/admin/images/{{ $header_data->photo }}" alt="">
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
                $('img#img').attr('src',url).width('150px').height('150px');
            })
        })
    </script>

@endsection
