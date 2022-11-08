@extends('layouts.app')
@section('content')
<div class="d-flex flex-column-fluid">
    <div class="container-fluid">
        <!--begin::Notice-->
        <div class="card card-custom gutter-b">
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label"><i class=" text-primary"></i> </h3>
                </div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="#" class="btn btn-primary btn-sm font-weight-bolder" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus-circle"></i>Add New</a>
                    <!--end::Button-->
                </div>
            </div>
        </div>
        <div class="card card-custom">
            <div class="card-body">
                <!--begin: Datatable-->
                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th>SL</th>
                                            <th>name</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $key=>$Service)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $Service->name}}</td>
                                            <td>{{ $Service->details}}</td>
                                            <td>
                                                <a href="{{route('service.edit',$Service->id)}}" class="btn btn-success">Edit</a>
                                                <a href="{{route('service.delete',$Service->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">ame</label>
                        <input type="text" class="form-control" id="recipient-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Details</label>
                        <textarea class="form-control" id="message-text" name="details" rows="4" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="close" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end: Modal-->

@endsection