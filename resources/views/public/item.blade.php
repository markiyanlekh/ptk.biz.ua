<!doctype html>
<html lang="{{app()->getLocale()}}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="icon" href="../../../resources/pictures/icon/ptk.ico">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../resources/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../../resources/css/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../resources/css/item.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../../../resources/js/script.js"></script>
    <script src="../../../resources/js/item.js"></script>

    <title>{{$current->name}}</title>

  </head>
  <body>  
    <header>
      @include('public.moduls.navbar')
      @yield('navbar')
     </header>  
        @if ($errors->any())
                                <div  class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                  @endif
                                  @if (session('success_order'))
                                      <div class="alert alert-success">
                                          {{ session('success_order') }}
                                      </div>
                                  @endif    
    <div class="maincontainer"> 
        <div class="itemcard"> 
          <div class="front ">
              <div class="col-7 p-3 ">
                      <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div  class="carousel-item active">
                            <img   class="first-slide"  
                            src="../../../pics/{{explode(',',trim($current->pics))[0]}}"" alt="First slide">
                           </div>
                               


                                @foreach(explode(',',trim($current->pics)) as $pic)
                                  @if($pic!=explode(',',trim($current->pics))[0])
                                    @if(strlen($pic)>1)
                                  <div class="carousel-item">
                                  <img  class="second-slide" align="center" src="../../../pics/{{$pic}}" alt="Second slide">

                                  </div>
                                    @endif
                                  @endif
                               @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                     

                    <center>
                      <div class="wrapper">
                        <div class="row "> 
                            @foreach(explode(',',trim($current->pics)) as $pic)
                              @if(strlen($pic)>1)
                              <img class="item_pic" src="../../../pics/{{$pic}}" alt="Second slide">
                              @endif
                            @endforeach
                         </div>
                       </div>
                      </center>
                </div>
               
            @if(app()->getLocale()=="uk") 
                  {{ session()->put('desc',$current->uk_description) }}
            @elseif(app()->getLocale()=="ru") 
                  {{ session()->put('desc',$current->uk_description) }}
            @endif
              <div class="col-5 p-3">
                <div class="container-fluid">

                  @foreach($categories as $category)
                    @if($category->id==$current->id_category)
                     <h4 class="">
                       
                        @if(app()->getLocale()=="uk") 
                            {{$category->uk_name}}
                        @elseif(app()->getLocale()=="ru") 
                            {{$category->ru_name}}
                      @endif
                     </h4>
                    @endif
                  @endforeach
                     <h4 class="">{{$current->name}}</h4>

                   @foreach(explode("|",session('desc')) as $desc)
                   @if($desc!=null)
                   @if(ends_with($desc,":"))
                  <h5 class="">{{$desc}}</h5>        
                   @else
                   <p class="item_text">&emsp;{{$desc}}</p>
                   @endif
                   @endif
                   @endforeach



             </div>

              <div class="container-fluid item_panel">
                      <button onclick="rotate()" class="btn col-4 btn-dark">{{trans('messages.prepare')}}</button>
                      <button id="plain0" onclick='rotate()' class="btn col-2 btn-dark">
                          <i class="fa fa-file-text"></i></button>
                      <button id="back" class="btn col-2 btn-info"> 
                          <i class="fa fa-arrow-circle-left"></i></button>
                      </div>
                </div>
            </div>
            <div class="back">
              <div style="background-image: url('../../../pics/{{explode(',',trim($current->pics))[count(explode(',',$current->pics))-2]}}')" class="col-7">   
                <button id="download" onclick="dload('{{$current->id}}')" class="btn col-3 btn-info" >{{trans('messages.download')}}</button>     
                 <button id="return" class="btn col-1 btn-dark" >
                   <i class="fa fa-arrow-circle-left"></i></button>
                     
              </div>

              <div class="col-5">
                <form action="../order/{{$current->id}}" id="order_form" method="post" enctype="multipart/form-data">
                   {{csrf_field() }}
                  <div class="form-group d-flex justify-content-end row">
                    <div class="col-md-9 form-title">Зробити замовлення</div>
                    </div>
                             <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Розмір</label>
                                <div class="input-group col-4 px-0  ml-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text mb-2 fa fa-arrows-v" id="basic-addon7"></span>
                                      </div>
                                      <input type="text" name="width" class="form-control"  aria-label="Username" aria-describedby="basic-addon7">
                                    </div>
                                  <div class="input-group col-4 ml-2 px-0">
                                    <div class="input-group-prepend">
                                          <span class="input-group-text mb-2 fa fa-arrows-h" id="basic-addon6"></span>
                                        </div>
                                        <input type="text" name="height" class="form-control"  aria-label="Username" aria-describedby="basic-addon6">
                                      </div>
                                  </div>

                            <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Ваше ім'я</label>
                                <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text fa fa-user-circle-o mb-2" id="basic-addon5"></span>
                                      </div>
                                      <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon5">
                                    </div>
                                  </div>
                             <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Організація</label>
                                <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text mb-2  fa fa-building-o" id="basic-addon4"></span>
                                      </div>
                                      <input type="text" name="corp" class="form-control" aria-label="Username" aria-describedby="basic-addon4">
                                    </div>
                                  </div> 
                              <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">E-mail</label>
                                <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text fa fa-envelope-o mb-2" id="basic-addon3"></span>
                                      </div>
                                      <input type="email" name="email" class="form-control"  aria-label="Username" aria-describedby="basic-addon3">
                                    </div>
                                  </div>
                               <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Телефон</label>
                                <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text fa fa-phone-square mb-2" id="basic-addon2"></span>
                                      </div>
                                      <input type="text" name="tel" class="form-control" aria-label="Username" aria-describedby="basic-addon2">
                                    </div>
                                  </div>
                               <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Ескіз</label>
                                  <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text mb-2 fa fa-file-text" id="inputGroupFileAddon01"></span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" name='plain' class="custom-file-input " id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                                      </div>
                                    </div>
                                  </div>
                               <script type="text/javascript">
                                 $(document).ready(function(){
                                    $('input[name="plain"]').on('change',function(){
                                      $('label[for="inputGroupFile01"]').html($(this).val());
                                    });
                                 });
                               </script>

                                 <div class="form-group row">
                                <label class="col-3  col-form-label text-md-left">Коментар</label>
                                <div class="input-group col-9">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text fa fa-comments-o " id="basic-addon1"></span>
                                      </div>
                                      <textarea type="text" class="form-control" rows="3" name="comment" aria-label="Username" aria-describedby="basic-addon1">  </textarea>
                                    </div>
                                  </div>
                            <div class="form-group my-0 d-flex justify-content-end row">
                                <div class="col-md-9 ">
                                    <input  id="submit" value="{{trans('messages.submit')}}" type="submit" class="form-control btn btn-dark" name="Submit">
                                    
                                </div>
                            </div>

                             
                </form>
              
             </div>

          </div>
          </div>
        </div>
                                <div id="myModal" class="modal">
                                    <span class="close">×</span>
                                    <img class="modal-content" id="img01">
                                    <div id="caption"></div>
                                   </div>
                                   <script>

                                          var modalImg = document.getElementById("img01");
                                          var captionText = document.getElementById("caption");
                                          var modal=document.getElementById("myModal");
      
                                      document.getElementsByClassName('carousel-inner')[0].onclick=
                                      function(){

                                          var img=this.querySelector('.active').firstElementChild;  
                                          modal.style.display = "block";

                                          modalImg.src = img.src;

                                          captionText.innerHTML = document.title;
                                      }
                                      var span = document.getElementsByClassName("close")[0];

                                      span.onclick = function() { 
                                         
                                          modal.style.display = "none";
                                      }
                                      </script>
         <footer> 
          @include('public.moduls.footer')
          @yield('footer')
        </footer>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
