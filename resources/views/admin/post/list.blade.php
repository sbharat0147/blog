@extends('admin.layout.layout')
@section('page_title','Admin Post Edit')
@section('container')
<div>
    <h2><a href="/admin/add">Add Post</a>   </h2>
</div>
<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30"> 
                </p>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Title</th>
                            <th>Short Desc</th>
                            <th>Image</th>
                            <th>Post Date</th>
                        </tr>
                    </thead>
                         <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection