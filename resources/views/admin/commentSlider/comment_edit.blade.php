@extends('admin.admin_master')
@section('content')


    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Comment</h2>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('comment.slider.update',$edit_data->id) }}" method="POST">
                            @csrf
                            <div class="my-3">
                                <label for="">Comment</label>
                                <input name="comment" value="{{ $edit_data->comment }}" class="form-control" type="text">
                            </div>
                            <div class="my-3">
                                <label for="">Author</label>
                                <input name="author" value="{{ $edit_data->author }}" class="form-control" type="text">
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
