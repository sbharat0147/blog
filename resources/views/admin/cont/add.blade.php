@extends('admin.layout.layout')
@section('page_title','POST')
@section('container')
<div>
    <h2><a href={{route('listPage')}}>Back</a></h2>
</div>
<div class="x_content">
    <br>
        <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="{{route('submitcont')}}">

        @csrf
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" class="form-control " name="name">
                    @error('name')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">email</label>
                <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="textarea" name="email">
                    @error('email')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Mobile No</label>
                <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="textarea" name="mobile_no">
                    @error('mobile_no')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                <div class="col-md-6 col-sm-6 ">
                    <input class="form-control" type="textarea"  name="address">
                    @error('address')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection
