@extends('admin.layout.layout')
@section('page_title','POST')
@section('container')
<div>
    <h2><a href="/admin/post">Back</a></h2>
</div>
<div class="x_content">
    <br>
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" action="/admin/edit">

            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" class="form-control ">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Short Description
                </label>
                <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="last-name" name="last-name" required="required" class="form-control">
                </div>
            </div>
            <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Long Description</label>
                <div class="col-md-6 col-sm-6 ">
                    <input id="middle-name" class="form-control" type="textarea" name="middle-name">
                </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Post Date</label>
                <div class="col-md-6 col-sm-6 ">
                    <input class="form-control" type="Date" name="middle-name">
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