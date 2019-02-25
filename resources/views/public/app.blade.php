<!doctype html>
<html lang="{{ app()->getLocale()}}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="icon" href="../resources/pictures/icon/ptk.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../resources/css/navbar.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/carousel.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/pricing.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/album.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ПРОМТЕХКОМПЛЕКТ</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../resources/js/script.js"></script>
         <script src="../../resources/js/main.js"></script>
        
  </head>
  

  <body>  
    <div id="myOverlay" class="overlay1">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content col-sm-8 p-2">
        <form action="/search" method="post">
                             {{csrf_field() }}

          <input id="s_input" type="text" placeholder="{{trans('messages.search')}}" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>

     <span class="top-btn  bg-dark  text-white pt-0 " ><i style="font-size:24px;"class=" material-icons">expand_less</i></span>
     <div class="container-fluid p-0">

       <video muted="muted" autoplay loop class="landing_video" width="100%" height="auto" >
  <source src="../resources/10fin.mp4" type="video/mp4">
    <source src="../resources/10fin.webm"  type="video/webm">
</video>
<div class="container-fluid d-flex flex-column  align-items-center justify-content-start  al p-0 overlay">
    @include('public.moduls.navbar')
    @yield('navbar')
        <div style="width: 40%!important; border-radius: 4px;" class="  container-fluid greet  px-0 bg-dark-20 mt-5 d-flex flex-column justify-content-center align-items-center">  
       <a class="navbar-brand2  d-flex justify-content-center p-0 h-75" href="/public">ПРОМТЕХКОМПЛЕКТ  </a>   
              <p class="sub_brand pb-2 p-0">{{trans('messages.moto')}}</p>
               
                 
    </div>
</div>
     </div>

      <div class="container-fluid position-relative offset d-flex flex-column align-items-center justify-content-center p-0  ">
            <div class="row my-sm-2 col-sm-8 p-0 d-flex justify-content-between featurette">
                     <div class="maincard  col-sm-4  " style="max-width: 25rem;height: 15rem;">
                      <div class="thecard container d-flex justify-content-between rounded p-0  bg-dark "> 
                              <div class="thefront  d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                
                                      <div class="cc pl-2 py-0 my-0 text-white">
                                        {{trans('messages.nets')}}<br>{{trans('messages.cat_1')}}
                                      </div>
                                    
                              </div>
                                  <div class="theback w-100 h-100  m-0 p-0">
                                    <img class="w-100 h-100 p-0 m-0 rounded" src="../resources/pictures/cat1.jpg">
                                  </div>
                              </div>
                            </div>
                      <div class="maincard  col-sm-4  " style="max-width: 25rem;height: 15rem;">
                        <div class="thecard container d-flex justify-content-between rounded p-0  bg-dark "> 
                              <div class="thefront d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                
                                        <div class="cc pl-2  text-white">
                                        {{trans('messages.nets')}}<br>{{trans('messages.cat_2')}}
                                      </div>
                              </div>
                                  <div class="theback w-100 h-100  m-0 p-0">
                                      <img class="w-100 h-100 p-0 m-0 rounded" src="../resources/pictures/cat2.jpg">
                                  </div>
                              </div>
                            </div>
                      <div class="maincard  col-sm-4  " style="max-width: 25rem;height: 15rem;">
                        <div class="thecard container d-flex justify-content-between rounded p-0  bg-dark "> 
                              <div class="thefront d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                
                                        <div class="cc pl-2 text-white">
                                        {{trans('messages.nets')}}<br>{{trans('messages.cat_3')}}
                                      </div>
                              </div>
                                  <div class="theback w-100 h-100  m-0 p-0">
                                        <img class="w-100 h-100 p-0 m-0 rounded" src="../resources/pictures/cat3.jpg">
                                  </div>
                              </div>
                            </div>
                     </div>
           <div class="row col-sm-8 my-sm-2 p-0 d-flex justify-content-between featurette">
                     <div class="maincard   col-sm-6  " style="max-width: 38rem;height: 13rem;">
                      <div class="thecard container d-flex justify-content-between rounded p-0  bg-dark "> 
                              <div class="thefront d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                
                                        <div class="cc pl-2 text-white">
                                         {{trans('messages.conveyors')}}
                                      </div>
                              </div>
                                  <div class="theback w-100 h-100  m-0 p-0">
                                        <img class="w-100 h-100 p-0 m-0 rounded" src="../resources/pictures/cat4.jpg">
                                  </div>
                              </div>
                            </div>
                      <div class="maincard   col-sm-6  " style="max-width: 38rem;height: 13em;">
                        <div class="thecard container d-flex justify-content-between rounded p-0  bg-dark "> 
                              <div class="thefront d-flex justify-content-center align-items-center p-0 w-100 h-100">
                                  <div class="cc pl-2 text-white">
                                        {{trans('messages.accorities')}}
                                      </div>
                              </div>
                                  <div class="theback w-100 h-100  m-0 p-0">
                                        <img class="w-100 h-100 p-0 m-0 rounded" src="../resources/pictures/cat5.jpg">
                                  </div>
                              </div>
                            </div>
                     </div>
                        
      </div>
     
     <div id="catalog" class="container-fluid item-area d-flex h-100  w-100 mt-5  flex-column justify-content-center align-items-center">
         @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                  @endif
                                  @if (session('success_order'))
                                      <div id="dload_success" class="alert text-center w-75  alert-success">
                                          {{ session('success_order') }}
                                      </div>
                                  @endif
                  @if(session()->has('results'))
                <p id="result_head" class="lead lead-category mt-3 ">{{trans('messages.find')}}" {{session('keyword')}} "</p>
                <div id="result_box" class="row col-md-9  p-0 my-sm-3 "> 


                      @foreach(session('results') as $product)

               
                                        <div class="col-6 col-md-4 col-lg-3 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                    <div onclick='item_redirect({{$product->id}})' class="card px-1 border-0 w-100 m-0"  style="min-height: 300px; background-image: url('../pics/{{explode(',',trim($product->pics))[0]}}');background-position:center center;background-size: auto 100% background-repeat: no-repeat;" alt="Card image cap">
                        <div class="overlay-item bg-info">
                              <div class="text-item text-item-search">
                                @foreach($categories as $category)
                            @if($product->id_category==$category->id)
                            
                              @if(app()->getLocale()=="uk") 
                                    {{$category->uk_name}}
                              @elseif(app()->getLocale()=="ru") 
                                    {{$category->ru_name}}
                              @endif
                            @endif
                          @endforeach
                          <br> {{$product->name}}</div>
                            </div>
                                               
                       
                    </div>
                     <div class="d-flex w-100 my-sm-3  justify-content-end align-items-center">
                          <button  class="btn btn-a col-sm-6 ml-1 btn-sm border-dark text-white btn-dark" onclick="item_redirect({{$product->id}})" >{{trans('messages.open')}}</button>
                         
                          <button onclick="dload({{$product->id}})" class="btn col-sm-2   border-info  btn-info"> <i  class="fa fa-file-text"></i></button>
                        </div>
                      </div>
                
                
                     @endforeach
                   </div>
                    
                      <p class="lead lead-category inv bg-info border-dark rounded text-white  px-3 p-2  mb-3 ">
                         @if(session('results')->isEmpty())
                         {{trans('messages.nofind')}} <br>
                          @endif
                         
                        <i onclick="prev()" style="cursor:pointer;" class="fa fa-arrow-circle-o-left"></i>
                      </p>

        @else

          @foreach($categories as $category)
          <p class="lead lead-category my-3 ">
            @if(app()->getLocale()=="uk") 
                  {{$category->uk_name}}
            @elseif(app()->getLocale()=="ru")  
                  {{$category->ru_name}}
            @endif
               
              
         
          <div class="row col-md-9  p-0 my-sm-2 "> 
                
                @foreach($products as $product)
                @if($product->id_category==$category->id)

               <div class="col-6 col-md-4 col-lg-3 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                  <div onclick='item_redirect({{$product->id}})' class="card px-1 border-0 w-100 m-0"  style="min-height: 300px; background-image: url('../pics/{{explode(',',trim($product->pics))[0]}}');background-position:center center;background-size: auto 100% background-repeat: no-repeat;" alt="Card image cap">
                      <div class="overlay-item bg-info">
                            <div class="text-item">{{$product->name}}</div>
                          </div>
                                             
                     
                  </div>
                   <div class="d-flex w-100 my-sm-3  justify-content-end align-items-center">
                        <button  class="btn btn-a col-sm-6 ml-1 btn-sm border-dark text-white btn-dark" onclick="item_redirect({{$product->id}})" >{{trans('messages.open')}}</button>
                       
                        <button onclick="dload({{$product->id}})" class="btn col-sm-2   border-info  btn-info"> <i  class="fa fa-file-text"></i></button>
                      </div>
                    </div>
                
                 @endif
                  @endforeach
                </div>
                @endforeach
@endif
              </div>
            </div>
    <div class="container-fluid  my-2 d-flex flex-column  align-items-center justify-content-center p-0  ">
            <div class="row col-sm-8 p-0 d-flex my-sm-3  justify-content-center featurette">
              <p class="lead">{{trans('messages.partners')}}</p>
            </div>

            <div class="row my-sm-5 col-sm-11 px-2 my-3 d-flex justify-content-between featurette" style="min-height: 200px;">

                <div class="col-md-2 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                   <img class="partner" src="../resources/pictures/par1.png" >
                    </div>
                      <div class="col-md-2 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                                    <img class="partner" src="../resources/pictures/par2.png" >

                    </div>
                      <div class="col-md-2 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                                    <img class="partner" src="../resources/pictures/par3.png" >

                    </div>
                      <div class="col-md-2 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                                    <img class="partner" src="../resources/pictures/par4.png" >

                    </div>
                      <div class="col-md-2 mb-sm-2 d-flex flex-column align-items-center justify-content-center px-3">
                                    <img class="partner" src="../resources/pictures/par5.png" >

                    </div>
                   

                              </div>
                            </div>

     

   <footer>
  @include('public.moduls.footer')
    @yield('footer')</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>