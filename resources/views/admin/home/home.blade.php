@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="wrap" style="margin: 30px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Home Top Body Part Update</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('home.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <label for="">Title<span class="text-danger">*</span></label>
                            <input name="title" value="{{ $home_data->title }}" class="form-control" type="text">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Head Title<span class="text-danger">*</span></label>
                            <input name="head_title" value="{{ $home_data->head_title }}" class="form-control" type="text">
                            @error('head_title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Quote<span class="text-danger">*</span></label>
                            <input name="quote" value="{{ $home_data->quote }}" class="form-control" type="text">
                            @error('quote')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Author<span class="text-danger">*</span></label>
                            <input name="author" value="{{ $home_data->author }}" class="form-control" type="text">
                            @error('author')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Opportunity Title<span class="text-danger">*</span></label>
                            <input name="opportunity_title" value="{{ $home_data->opportunity_title }}" class="form-control" type="text">
                            @error('opportunity_title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text One<span class="text-danger">*</span></label>
                            <input name="text_one" value="{{ $home_data->text_one }}" class="form-control" type="text">
                            @error('text_one')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text Two<span class="text-danger">*</span></label>
                            <input name="text_two" value="{{ $home_data->text_two }}" class="form-control" type="text">
                            @error('text_two')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text Three<span class="text-danger">*</span></label>
                            <input name="text_three" value="{{ $home_data->text_three }}" class="form-control" type="text">
                            @error('text_three')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text Four<span class="text-danger">*</span></label>
                            <input name="text_four" value="{{ $home_data->text_four }}" class="form-control" type="text">
                            @error('text_four')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text Five<span class="text-danger">*</span></label>
                            <input name="text_five" value="{{ $home_data->text_five }}" class="form-control" type="text">
                            @error('text_five')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Text Six<span class="text-danger">*</span></label>
                            <input name="text_six" value="{{ $home_data->text_six }}" class="form-control" type="text">
                            @error('text_six')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="my-3">
                            <label for="">Photo<span class="text-danger">*</span></label>
                            <img id="img" src="{{ URL::to('') }}/admin/images/{{ $home_data->photo }}" alt="">
                            <input name="old_photo" value="{{ $home_data->photo }}" type="hidden">
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
