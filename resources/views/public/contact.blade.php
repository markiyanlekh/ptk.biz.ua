<!doctype html>
<html lang="{{app()->getLocale()}}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="icon" href="../resources/pictures/icon/ptk.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../resources/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/footer.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../resources/css/contact.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <title>Контакти</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../../resources/js/script.js"></script>
        <script src="../../resources/js/map.js"></script>

  </head>
  
  <body>   
    <header>
      @include('public.moduls.navbar')
      @yield('navbar')
     </header> 
         <div class="maincontainer">
                  <form action="{{ url('send') }} " class="col-7"  id="contact-main-form"  method="post" 
                  enctype="multipart/form-data">
                   {{csrf_field() }}  
             `     <div class="row form-group">
                        <p class="sub">{{trans('messages.reconnect')}}</p>
                    </div>
                      <div class="form-group ">
                               <textarea type="text" class="form-control" rows="6" name="message" aria-label="enter your message">  </textarea>
                                </div>
                              <div class="form-group px-1">  
                                    <input type="email" name="email" placeholder="{{trans('messages.your_email')}}" class="form-control col-7 mx-1  " >
                                    <input type="text" name="name" placeholder="{{trans('messages.your_name')}}" class="form-control col-5 mx-1 " >
                              </div>
                            <div class="form-group  d-flex justify-content-end ">
                            <input id="submit" type="submit" class="form-control border-0 btn-dark" value="{{trans('messages.submit')}}" name="submit">
                                
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                  @endif
                                  @if (session('success'))
                                      <div class="alert alert-success">
                                          {{ session('success') }}
                                      </div>
                                  @endif
                </form>
            </div>
      <div class="container-fluid infocontainer bg-info">
                    <div class="col-3 ">
                       <div  class="mb-2 d-flex justify-content-start">
                       <i class=" col-md-2 p-0 material-icons"></i><p class=" p-0 t-foot-title col-md-5">{{trans('messages.contact')}}</p></div>
                          <ul class="list-unstyled d-flex flex-column justify-content-start ">
                                    <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                         <i class=" col-md-2 p-0 material-icons">mail_outline</i><p class=" p-0 col-md-10">ptk@ukr.net</p></li>
                                     <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                       <i class=" col-md-2 p-0 material-icons">call</i><p class=" p-0 col-md-10">
                                        +(38) 096 116 37 00
                                       <br>
                                      +(38) 050 507 48 22 
                                       <br>
                                      +(38) 050 320 39 44
                                       </p></li>
                               </ul>
                            </div>

                          <div class="col-3">
                          <ul class="list-unstyled d-flex flex-column justify-content-start">
                            <div  class="mb-2 d-flex justify-content-start">
                               <i class=" col-md-2   p-0 material-icons"></i><p class=" p-0 t-foot-title col-md-5">{{trans('messages.adress')}}</p></div>
                               <ul class="list-unstyled d-flex flex-column justify-content-start">
                                   <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                     <i class=" col-md-2 p-0 material-icons">room</i><p class=" col-md-10 p-0"><b>49008, {{trans('messages.country')}}</b><br> {{trans('messages.street')}}, 154/18 </p></li>
                                    <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                     <i class=" col-md-2 p-0 material-icons">access_time</i><p class=" p-0  col-md-10">
                                      <b>{{trans('messages.md_fr')}}</b> <span class="ml-sm-10">з 9:00 до 18:00</span><br><b>{{trans('messages.weekend')}}</b> <span class="ml-sm-10"> {{trans('messages.closed')}}</span>
                                     </li>
                                  </ul>
                                        </ul>
                        </div>
                           <div class="col-3">
                              <div class="mb-2 d-flex justify-content-start">
                              <i class=" col-2   p-0 material-icons"></i><p class=" p-0 t-foot-title col-5">{{trans('messages.payment')}}</p></div>
                                    <ul class="list-unstyled d-flex flex-column justify-content-start">
                                      <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                           <i class=" col-md-2 p-0 material-icons">credit_card</i><p class=" col-md-10 p-0">
                                             <b> МФО: </b> 305299
                                           </p></li>
                                       <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                           <i class=" col-md-2 p-0 material-icons">credit_card</i><p class=" col-md-10 p-0">
                                             <b>ЄДРПОУ</b> 25023143
                                           </p></li>
                                           <li class="pt-1 t-foot"> <div class=" d-flex justify-content-center">
                                           <i class=" col-md-2 p-0 material-icons">credit_card</i><p class=" col-md-10 p-0">
                                            <b> Р/Р</b> 26004114767001
                                           </p></li>
                                      </ul>
                                </div>
                  </div>
      <div class="bg-map" id="map"></div>
        <footer> 
          @include('public.moduls.footer')
          @yield('footer-md')
        </footer>
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>