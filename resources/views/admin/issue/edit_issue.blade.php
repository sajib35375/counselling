@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Issue</h2>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('issue.update',$edit_data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="my-3">
                                <label for="">Title</label>
                                <input name="title" value="{{ $edit_data->title }}" class="form-control" type="text">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="">Short Text</label>
                                <textarea class="form-control" name="top_text" id="" cols="30" rows="10">{{ $edit_data->top_text }}</textarea>
                                @error('top_text')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="">Long Text</label>
                                <textarea name="bottom_text" id="editor1" rows="10" cols="80">
												{{ $edit_data->bottom_text }}
						</textarea>
                                @error('bottom_text')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="my-3">
                                <label for="">Photo</label>
                                <img id="img" src="{{ URL::to('') }}/admin/images/{{ $edit_data->photo }}" alt="">
                                <input name="old_photo" value="{{ $edit_data->photo }}" type="hidden">
                                <input name="photo" class="form-control-file" type="file">
                                @error('photo')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="my-3">
                                <input class="btn btn-primary" type="submit">
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
