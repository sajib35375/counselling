@extends('admin.admin_master')
@section('content')


   <div class="wrap" style="margin: 30px;">
       <div class="row">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">
                       <h2>All Comments</h2>
                   </div>
                   <div class="card-body">
                       <table class="table table-bordered table-striped">
                           <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Comment</th>
                                    <th width="20%">Author</th>
                                    <th width="20%">Action</th>
                                </tr>
                           </thead>
                           <tbody>

                                @foreach($all_comment as $comment)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>{{ $comment->author }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('comment.slider.edit',$comment->id) }}">Edit</a>
                                        <a id="delete" class="btn btn-danger" href="{{ route('comment.slider.delete',$comment->id) }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="card">
                   <div class="card-header">
                       <h2>Add New Comment</h2>
                   </div>
                   <div class="card-body">

                       <form action="{{ route('comment.slider.store') }}" method="POST">
                            @csrf
                           <div class="my-3">
                               <label for="">Comment</label>
                               <input name="comment" class="form-control" type="text">
                           </div>
                           <div class="my-3">
                               <label for="">Author</label>
                               <input name="author" class="form-control" type="text">
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
