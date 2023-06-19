@extends('admin.admin_master')
@section('content')

    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Post</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Short Text</th>
                                    <th>Long Text</th>
                                    <th width="20%">Photo</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($all_post as $post)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ Str::of($post->top_text)->words(50) }}</td>
                                    <td>{!! Str::of($post->bottom_text)->words(50) !!}</td>
                                    <td><img style="width: 150px;height: 150px;" src="{{ URL::to('') }}/admin/images/{{ $post->photo }}" alt=""></td>
                                    <td>
                                        <a class="btn btn-primary" href="">Edit</a>
                                        <a class="btn btn-danger" href="">Delete</a>
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
