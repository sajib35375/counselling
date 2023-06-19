@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="wrap" style="margin: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Site Setting</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('site.setting.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <label for="">Logo <span class="text-danger">*</span></label>
                            <img id="img" src="{{ URL::to('') }}/admin/images/{{ $data->logo }}" alt="">
                            <input name="old_logo" value="{{ $data->logo }}" type="hidden">
                            <input name="logo" class="form-control" type="file">
                        </div>
                        <div class="my-3">
                            <label for="">Phone<span class="text-danger">*</span></label>
                            <input name="phone" value="{{ $data->phone }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Address<span class="text-danger">*</span></label>
                            <input name="address" value="{{ $data->address }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Email<span class="text-danger">*</span></label>
                            <input name="email" value="{{ $data->email }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Facebook<span class="text-danger">*</span></label>
                            <input name="facebook" value="{{ $data->facebook }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Twitter<span class="text-danger">*</span></label>
                            <input name="twitter" value="{{ $data->twitter }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Instagram<span class="text-danger">*</span></label>
                            <input name="instagram" value="{{ $data->instagram }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Linkedin<span class="text-danger">*</span></label>
                            <input name="linkedin" value="{{ $data->linkedin }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Social Email<span class="text-danger">*</span></label>
                            <input name="social_email" value="{{ $data->social_email }}" class="form-control" type="text">
                        </div>
                        <div class="my-3">
                            <label for="">Blogger<span class="text-danger">*</span></label>
                            <input name="blogger" value="{{ $data->blogger }}" class="form-control" type="text">
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
            $(document).on('change','input[name="logo"]',function (e){
                e.preventDefault();
                let url = URL.createObjectURL(e.target.files[0]);
                $('img#img').attr('src',url).width('100px').height('100px');
            })
        })
    </script>





@endsection
