<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="icon" href="../../resources/pictures/icon/ptk.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../resources/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../../resources/css/footer.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../resources/css/about.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <title>Про нас</title>
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
                  <br>
                        <p class="sub">{{trans('messages.about_normal')}}</p>
                        <br>
                        <div class="textcontainer w-100">
                          <div class="about-text-container col-8">
                            <div class="col-2 ptk-logo-icon">
                               <img class="partner" src="../../resources/pictures/logo17.png" >
                              </div>
                            <div class="col-10 ">
                                &#8195;<b>{{trans('messages.about_textbox0')}}</b>{{trans('messages.about_textbox1')}}
                              </div>
                            </div>
                          <p class="about-text col-8">
                              &#8195;{{trans('messages.about_textbox2')}}
                                
                              </p>
                          <div class="about-text-container col-8">
                            <div class="col-8 ">
                              &#8195;{{trans('messages.about_textbox3')}}
                              </div>
                              <div class="col-4 ptk-logo-link">
                                <a href="http://ptk.org.ua/" class="nolink border-0"><img class="partner" src="../../resources/pictures/logoo.png" ></a>
                              </div>
                            </div>
                           <p class="about-text col-8">
                              &#8195;{{trans('messages.about_textbox4')}}
                           </p>
                           
                          <p class="sub">{{trans('messages.partners')}}</p>
                          <p class="about-text col-8">
                             &#8195;{{trans('messages.about_textbox5')}}<br>

                          </p>
                          
                          <div class="about-brand col-10">
                           <div class="col-2 ">
                             <img class="partner" src="../../resources/pictures/par1.png" >
                            </div>

                           <div class="col-2">
                             <img class="partner" src="../../resources/pictures/par2.png" >
                            </div>
                             
                           <div class="col-2">
                             <img class="partner" src="../../resources/pictures/par3.png" >
                            </div>

                           <div class="col-2">
                             <img class="partner" src="../../resources/pictures/par4.png" >
                            </div>

                           <div class="col-2 ">
                             <img class="partner" src="../../resources/pictures/par5.png" >
                            </div>
                            </div>
                          </div>
                        
                        </div>
                   
            </div>
      <div class="container-fluid infocontainer bg-info">
               
            </div>

        <footer> 
          @include('public.moduls.footer')
          @yield('footer')
        </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>