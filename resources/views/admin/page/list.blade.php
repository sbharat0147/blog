@extends('admin.layout.layout')
@section('page_title','Admin Post Edit')
@section('container')

<div>
    <h2>    <a href={{route('addPage')}}>Add Page</a>   </h2>
</div>
<div class="x_content">
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30"> {{session('msg')}}
                </p>

                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Added on</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($result as $list)
                         <tr>
                            <th>{{$list->id}}</th>
                            <th>{{$list->name}}</th>
                            <th>{{$list->description}}</th>
                             <th>{{$list->slug}}</th>
{{--                            <th><img src="{{ asset('/storage/admin_asset/images/'.$list->image) }}" width="100%" height="100px"> </th>--}}
                            <th>{{$list->added_on}}</th>
                             <td>
                                 <a href="{{url('admin/editPage/'.$list->id)}}" type="button" class="btn btn-dark color_white">Edit</a>
                                 <a href="{{url('admin/deletePage/'.$list->id)}}" type="button" class="btn btn-danger color_white">Delete</a>

                             </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
