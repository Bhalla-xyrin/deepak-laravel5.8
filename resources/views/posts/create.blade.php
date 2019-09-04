@extends('layout.main')

@section('content')
 <style type="text/css">
 
 </style>
@include('layout.admin-nav') 
<h2 class="text-center">Add Post Here</h2>

<div class="container">
    <form method="post" action="/posts" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Discription</label>
            <div class="col-sm-9">
                <textarea name = "description" class="tinymce"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="gameimageid" class="col-sm-3 col-form-label">Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" id="gameimageid" class="custom-file-input">
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
        </div>

        <div class="form-group row">
            <label for="selct" class="col-sm-3 col-form-label">Category</label>
            <div class="col-sm-9">
            <select name="category" style="height: 35px;">
                <option value="">Please Select Category</option>
                <option value="laravel">Laravel</option>
                <option value="php">PHP</option>
                <option value="general">General</option>
            </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Post</button>
            </div>
        </div>
    </form></div>
@stop 