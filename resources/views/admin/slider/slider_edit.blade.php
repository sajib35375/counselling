@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Slider Edit</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('slider.update',$edit_slider->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="my-3">
                                <label for="">Photo</label>
                                <img id="img" style="width: 100px;height: 100px;" src="{{ URL::to('') }}/admin/images/{{ $edit_slider->photo }}" alt="">
                                <input name="old_photo" value="{{ $edit_slider->photo }}" type="hidden">
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
