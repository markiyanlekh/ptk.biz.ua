@extends('layouts.app')
@section('content')
<script language="javascript" type="text/javascript">
        $(function () {
            $("#inputGroupFile03").change(function () {
                    $("#con-pr").css('margin-bottom','1rem');
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                            var reader = new FileReader();
                            reader.onload = function (e) 
                            {
                                var img = $("<img />");
                                img.attr("style", "height:auto;width:33%;");
                                img.attr("src", e.target.result);
                                img.attr("class","img-thumbnail s_pic");
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        
                    });
            });
        });
</script>
<script type="text/javascript">
                                  $(document).ready(function(){
                                  $("label:contains('Add subtitle')").click(function(){
                                   var subtitle=$("<input />");
                                   subtitle.attr('class','form-control border-dark bg-light my-1 desc');
                                   subtitle.attr('type','text');
                                   var index=$("#btn-box").parent().children().length-1;
                                   subtitle.attr('name','description['+index+']');
                                   $("#btn-box").parent().append(subtitle);
                                  });

                                  $("form").submit(function(){
                                    $("input[class~='desc']").each(function()
                                    {
                                      if($(this).val().length==0)
                                        {
                                            $(this).remove();

                                        }
                                        var last=$(this).val().split("").length-1;
                                       if($(this).val()[last]!=":")
                                      $(this).val($(this).val()+" \:");
                                    });
                                    });

                                  $("label:contains('Add text')").click(function(){
                                   var subtitle=$("<textarea />");
                                   subtitle.attr('class','form-control border-dark desc my-1');
                                   subtitle.attr('type','text');
                                   var index=$("#btn-box").parent().children().length-1;
                                   subtitle.attr('name','description['+index+']');
                                   $("#btn-box").parent().append(subtitle);
                                  });
                                });
                                </script>
<div style="min-height:800px;" class="container-fluid w-100 d-flex flex-row align-items-center justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form  action="../../products/update/{{$current->id}}" method="post" enctype="multipart/form-data">
                       {{csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" value="{{$current->name}}" name="name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                            <select class="form-control" name="category">
                                @foreach($categories as $category)
                                @if($category->id==$current->id_category)
                                <option value="{{$current->id_category}}" selected>{{$category->ru_name}}</option> @endif                               
                                <option value="{{$category->id}}">{{$category->ru_name}}</option>
                              @endforeach
                            </select>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Description</label>
                           <div class="col-md-6 d-flex flex-column justify-content-between">
                              <div id="btn-box" class="d-flex justify-content-around"> 
                                <label class="form-control col-md-6 btn-outline-dark ">Add subtitle</label>
                                <label class="form-control col-md-6 btn-outline-dark">Add text</label> </div>
                                 @foreach(explode('|',$current->description) as $index=>$desc)
                                 @if($desc!=null)
                                 @if($desc[strlen($desc)-1]==":")
                                    <input  type="text" value="{{$desc}}" class="form-control border-dark bg-light my-1 desc" name="description[{{$index}}]">
                                @else
                                    <textarea type="text" class="form-control border-dark desc my-1" name="description[{{$index}}]" >{{$desc}}</textarea>
                                @endif
                                @endif
                              @endforeach
                           
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-md-4 col-form-label text-md-right">Picture</label>
                            <div class="col-md-6 file-input">
                                <input type="file" value="{{$current->pics}}" class="custom-file-input" name="picture[]" multiple="multiple" accept="image" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                <label class="custom-file-label input-label" for="inputGroupFile03"></label>
                            </div>
                        </div>
                            
                        <div id="con-pr" class="my-md-5 d-flex justify-content-center form-group row">
                            <div id="dvPreview" class="col-md-8 form-group row preview">
                              @foreach(explode(',',$current->pics) as $picture)
                               @if($picture)
                                <img class="img-thumbnail s_pic" src="../../../public/pics/{{$picture}}">
                                @endif
                              @endforeach
                            </div>
                        </div>

                        <div class="form-group my-3 d-flex justify-content-center row">
                            <div class="col-md-8 ">
                                <input id="submit" type="submit" class="form-control btn btn-outline-dark" name="Submit">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection