@extends('layouts.app')
@section('content')
<script>
 $(document).ready(function()
    {
        function previewFile()
        {
           var preview = document.querySelector('img'); //selects the query named img
           var file    = document.querySelector('input[type=file]').files[0]; //sames as here
           var reader  = new FileReader();

           reader.onloadend = function ()
           {
               preview.src = reader.result;
           }

           if (file) {
               reader.readAsDataURL(file); //reads the data as a URL
           } else {
               preview.src = "";
           }
        };
                
        $("#picture").change(function()
        {        
            previewFile();
              
        });
    });
</script>   
<div style="min-height:500px;" class="container-fluid w-100 d-flex flex-row align-items-center justify-content-center">
        <div class="mt-nd-5 col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>
                <div class="card-body">
                  <form id="edit_form"  method="post" action="../../categories/update/{{$current->id}}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">UK Name</label>
                            <div class="col-md-6">
                                <input id="uk_name" type="text" value="{{$current->uk_name}}" name="uk_name" class="form-control" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">RU Name</label>
                            <div class="col-md-6">
                                <input id="ru_name" type="text" value="{{$current->ru_name}}" class="form-control" name="ru_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Picture</label>
                            <div class="col-md-6">
                                <input id="picture" class="" type="file" value="/pics/{{$current->pic}}" name="picture" download>
                            </div>
                        </div>
                        
                        <div class="my-md-3 d-flex justify-content-center align-items-center form-group row">
                            <div class="col-md-6 form-group">
                                <img id="s_pic" class="col-md-12" src="/pics/{{$current->pic}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Edit</label>
                            <div class="col-md-6">
                                <input id="submit" type="submit" class="form-control" name="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
@endsection