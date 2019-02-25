@extends('layouts.app')
@section('content')

<script type="text/javascript">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Categoty</div>

                <div class="card-body">
                    <form  action="../../admin/categories/save" method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">UK-Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="uk_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">RU-Name</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="ru_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Picture</label>
                            <div class="col-md-6">
                                <input id="picture" type="file" name="picture" download>
                            </div>
                        </div>
                       
                        <div class="my-md-3 d-flex justify-content-center align-items-center form-group row">
                            <div class="col-md-6 form-group">
                                <img id="s_pic" class="col-md-12">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Add</label>
                            <div class="col-md-6">
                                <input id="submit" type="submit" class="form-control" name="Submit">
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
@endsection('content')