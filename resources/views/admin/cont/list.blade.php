@extends('admin.layout.layout')
@section('page_title','Admin Post Edit')
@section('container')

<div>
    <h2>    <a href={{route('addcont')}}>Add Contacts</a>   </h2>
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
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($result as $list)
                         <tr>
                            <th>{{$list->id}}</th>
                            <th>{{$list->name}}</th>
                            <th>{{$list->email}}</th>
                             <th>{{$list->mobile_no}}</th>
{{--                            <th><img src="{{ asset('/storage/admin_asset/images/'.$list->image) }}" width="100%" height="100px"> </th>--}}
                            <th>{{$list->address}}</th>
                             <td>
                                 <a href="{{url('admin/editcont/'.$list->id)}}" type="button" class="btn btn-dark color_white">Edit</a>
                                 <a href="{{url('admin/deletecont/'.$list->id)}}" type="button" class="btn btn-danger color_white">Delete</a>

                             </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
