@extends('admin.layout.layout')
@section('page_title','POST')
@section('container')
    <div>
        <h2><a href={{route('list')}}>Back</a></h2>
    </div>
    <div class="x_content">
        <br>
        <form id="demo-form2" enctype="multipart/form-data" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="{{url('updatePost/'.$result[0]->id)}}">

            @csrf
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" class="form-control " name="title" value="{{$result[0]->title}}">
                    @error('title')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Short Description
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="last-name"  required="required" name="short_desc" class="form-control" value="{{$result[0]->short_desc}}">
                    @error('short_desc')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Long Description</label>
                <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="textarea" name="long_desc" value="{{$result[0]->long_desc}}">
                    @error('long_desc')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="file" name="img">
                    @error('img')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Post Date</label>
                <div class="col-md-6 col-sm-6 ">
                    <input class="form-control" type="Date"  name="postdate" value="{{$result[0]->post_date}}">
                    @error('postdate')
                    <span class="field_error">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection

