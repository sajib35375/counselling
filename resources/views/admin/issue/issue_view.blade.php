@extends('admin.admin_master')
@section('content')


    <div class="wrap" style="margin: 30px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Issue</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th width="20%">Short Text</th>
                                <th width="20%">Long Text</th>
                                <th width="20%">Photo</th>
                                <th width="20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($all_issue as $issue)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $issue->title }}</td>
                                <td>{!! Str::of($issue->top_text)->words(20) !!}</td>
                                <td>{!! Str::of($issue->bottom_text)->words(20) !!}</td>
                                <td><img style="width: 200px;height: 200px;" src="{{ URL::to('') }}/admin/images/{{ $issue->photo }}" alt=""></td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('issue.edit',$issue->id) }}">Edit</a>
                                    <a id="delete" class="btn btn-danger" href="{{ route('issue.delete',$issue->id) }}">Delete</a>
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
