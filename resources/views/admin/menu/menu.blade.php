@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <div class="wrap" style="margin: 30px;">
     <div class="row">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">
                     <h2>All Menu</h2>
                 </div>
                 <div class="card-body">
                     <table class="table table-striped table-bordered">
                         <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                         </thead>
                         <tbody>
                            @foreach($all_menu as $menu)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>
                                    @if($menu->status == true)
                                        <span class="badge badge-pill badge-info">Active</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Inactive</span>
                                        @endif
                                </td>
                                <td>
                                    @if($menu->status == true)
                                        <a class="btn btn-sm btn-warning" href="{{ route('menu.status.inactive',$menu->id) }}">Inactive</a>
                                    @else
                                        <a class="btn btn-sm btn-success" href="{{ route('menu.status.active',$menu->id) }}">Active</a>
                                    @endif
                                    <a  edit_id="{{ $menu->id }}" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary" id="edit">Edit</a>
                                    <a id="delete" class="btn btn-sm btn-danger" href="{{ route('menu.delete',$menu->id) }}">Delete</a>
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
                     <h2>Add New Menu</h2>
                 </div>
                 <div class="card-body">
                     <form action="{{ route('menu.store') }}" method="POST">
                         @csrf
                         <div class="my-3">
                             <label for="">Name</label>
                             <input name="name" class="form-control" type="text">
                             @error('name')
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



 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h2 class="modal-title" id="exampleModalLabel">Edit Menu</h2>

             </div>
             <div class="modal-body">
                 <form action="{{ route('menu.update') }}" method="POST">
                     @csrf
                     <div class="my-3">
                         <label for="">Name</label>
                         <input id="name" name="name" class="form-control" type="text">
                         <input name="menu_edit_id" id="id" type="hidden">
                     </div>
                     <div class="my-3">
                         <input id="sub" class="btn btn-primary" type="submit">
                     </div>
                 </form>
             </div>


         </div>
     </div>
 </div>


    <script>
        $(document).ready(function (){
            $(document).on('click','a#edit',function (e){
                e.preventDefault();

                let id = $(this).attr('edit_id');
                let path = "http://localhost:8000";

                $.ajax({
                    url:path+"/menu/edit/"+id,
                    type: "GET",
                    dataType:"json",
                    success: function (data){
                       $('input#name').val(data.name)
                       $('input#id').val(data.id)
                    }
                })
            })
        })

    </script>




@endsection
