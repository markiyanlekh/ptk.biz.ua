@section('footer')
 
       <div style="text-align: left; text-shadow: 1px 1px 5px rgba(0,0,0,0.6);" class=" bg-dark-50 nolink_foot d-flex justify-content-center w-100 h-100 pl-md-5 pt-5 " id="main-row">
            
            <div class="col-2 ml-5 ">
              <div style="font-size: 120%;font-weight: 400;" class="mb-2 d-flex justify-content-center">
                   <i class=" col-md-2 p-0 material-icons"></i><p class=" p-0 foo_sub col-md-10">{{trans('messages.contact')}}</p></div>
                      <ul class="list-unstyled d-flex flex-column justify-content-start">
                        <li class="py-1"> <div class=" d-flex justify-content-center">
                             <i class=" col-md-2 p-0 material-icons">mail_outline</i><p class=" p-0 col-md-10">ptk@ukr.net</p></li>
                         <li class="py-1"> <div class=" d-flex justify-content-center">
                             <i class=" col-md-2 p-0 material-icons">call</i><p class=" p-0 col-md-10">
                               +(38) 096 116 37 00
                               <br>
                              +(38) 050 507 48 22 
                              <br>
                              +(38) 050 320 39 44
                             </p></li>
                            </ul>
                   </div>

          <div class="col-2 ">
                    <div style="font-size: 120%;font-weight: 400;" class="mb-2 d-flex justify-content-center">
                       <i class=" col-md-2   p-0 material-icons"></i><p class=" p-0 foo_sub col-md-10">{{trans('messages.adress')}}</p></div>
                          <ul class="list-unstyled d-flex flex-column justify-content-start">
                            <li class="py-1"> <div class=" d-flex justify-content-center">
                                 <i class=" col-md-2 p-0 material-icons">room</i><p class=" col-md-10 p-0">49008, {{trans('messages.country')}}<br> {{trans('messages.street')}}, 154/18 </p></li>
                            <li class="py-1"> <div class=" d-flex justify-content-center">
                                 <i class=" col-md-2 p-0 material-icons">access_time</i><p class=" p-0  col-md-10">
                                  <b>{{trans('messages.md_fr')}}</b> <span class="ml-sm-10"> 9:00 > 18:00</span><br><b>{{trans('messages.weekend')}}</b> <span class="ml-sm-10"> {{trans('messages.closed')}}</span>
                                 </li>
                              </ul>
           </div>

          <div class="col-2 d-flex flex-column justify-content-start align-item-center">
              
             <div style="font-size: 120%;font-weight: 400;"  class=" mb-2 d-flex justify-content-center">
                   <i class=" col-md-2 p-0 material-icons"></i><p class=" p-0 foo_sub  col-md-10">{{trans('messages.site_map')}}</p></div>
                <ul style="font-size: 110%;" class="list-unstyled d-flex flex-column justify-content-start ">
                  <li class="d-flex   align-item-end"><i class="  material-icons col-md-2 p-0">home</i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public" class="nolink_foot_map">{{trans('messages.main')}}</a>  </p></li>
                        <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons"> shopping_cart
                </i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public#catalog" class="nolink_foot_map">{{trans('messages.catalog')}}</a></p></li>
                  <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons">info_outline</i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public/about" class="nolink_foot_map">{{trans('messages.about')}}</a></p></li>
                  <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons">content_paste
                </i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public/contact" class="nolink_foot_map">{{trans('messages.contact')}}</a></p></li>

                </ul>
          </div>

             <div class="col-4 w-100 py-0 d-flex flex-column  justify-content-start">
               <div style="font-size: 120%;font-weight: 400; flex:1 1;"  class="row col-10 p-0 mb-2 d-flex justify-content-center">
                   <i class=" col-md-1 p-0 material-icons"> </i><p class=" py-0 pr-0 foo_sub2   col-md-11">{{trans('messages.connect')}}
                   </p>
                 </div>
               <form class="form-group "  id='contact_form' method="post" action='/send'>
                    {{csrf_field() }} 
                                        <div class="row col-10  m-0 d-flex justify-content-start align-item-end">
                                            <i class="col-md-1 p-0 material-icons">message</i>
                                                 <div class="form-group px-0 col-md-11">
                                                    <textarea class="form-control bg-white-50" name="message" rows="3" placeholder="{{trans('messages.message')}}" ></textarea>
                                                </div>

                                                 <i class="col-md-1 p-0 material-icons">alternate_email</i>
                                                 <div class="form-group px-0 pr-2  col-md-4">
                                                    <input type="email" class="form-control  bg-white-50" name="email" placeholder="E-mail">
                                                  </div>  
                                                  <div class="form-group px-0 pr-2  col-md-4">
                                                    <input type="text" class="form-control  bg-white-50" name="name" placeholder="{{trans('messages.sender')}}">
                                                  </div>
                                                      <div class="form-group p-0 col-md-3"> 
                                                          <input class="form-control material-icons p-0 btn send_btn btn-outline-light" type="submit" id="send_message2" value="{{trans('messages.submit')}}">
                                                        </div>
                                                
                                            </div>
                                                </form>
                          </div>
                        </div>

            @if ($errors->any())
                <div id="alert" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))

                <div id="alert" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                    <div class="container-fluid bg-dark w-100 d-flex justify-content-center align-item-end">
             
                      <div class="nolink_foot  d-flex justify-content-start p-0">
                        {{trans('messages.legacy')}}
                      </div>
        </div>
@endsection
@section('footer-sm')
    <div style="text-align: left; text-shadow: 1px 1px 5px rgba(0,0,0,0.6);" class=" bg-dark-50 nolink_foot d-flex justify-content-center w-100 h-100 p-0 " id="main-row">
            
            <div class="col-4  ">
              <div style="font-size: 120%;font-weight: 400;" class="mb-2 d-flex justify-content-center">
                   <i class=" col-md-2 p-0 material-icons"></i><p class=" p-0 foo_sub col-md-10">{{trans('messages.contact')}}</p></div>
                      <ul class="list-unstyled d-flex flex-column justify-content-start">
                        <li class="py-1"> <div class=" d-flex justify-content-center">
                             <i class=" col-md-2 p-0 material-icons">mail_outline</i><p class=" p-0 col-md-10">ptk@ukr.net
                             </p></li>
                         <li class="py-1"> <div class=" d-flex justify-content-center">
                             <i class=" col-md-2 p-0 material-icons">call</i><p class=" p-0 col-md-10">
                               +(38) 096 116 37 00
                               <br>
                              +(38) 050 507 48 22 
                              <br>
                              +(38) 050 320 39 44
                            </p></li>
                            </ul>
                   </div>

                <div class="col-4 ">
                          <div style="font-size: 120%;font-weight: 400;" class="mb-2 d-flex justify-content-center">
                             <i class=" col-md-2   p-0 material-icons"></i><p class=" p-0 foo_sub col-md-10">{{trans('messages.adress')}}</p></div>
                                <ul class="list-unstyled d-flex flex-column justify-content-start">
                                  <li class="py-1"> <div class=" d-flex justify-content-center">
                                       <i class=" col-md-2 p-0 material-icons">room</i><p class=" col-md-10 p-0">49008, Україна<br> вул. Робоча, 154/18 </p></li>
                                  <li class="py-1"> <div class=" d-flex justify-content-center">
                                       <i class=" col-md-2 p-0 material-icons">access_time</i><p class=" p-0  col-md-10">
                                        <b>{{trans('messages.md_fr')}}</b> <span class="ml-sm-10">з 9:00 до 18:00</span><br><b>{{trans('messages.weekend')}}</b> <span class="ml-sm-10"> {{trans('messages.closed')}}</span>
                                       </li>
                                    </ul>
                 </div>

                  <div class="col-4 d-flex flex-column justify-content-start align-item-center">
                      
                     <div style="font-size: 120%;font-weight: 400;"  class=" mb-2 d-flex justify-content-center">
                           <i class=" col-md-2 p-0 material-icons"></i><p class=" p-0 foo_sub  col-md-10">{{trans('messages.site_map')}}</p></div>
                        <ul style="font-size: 110%;" class="list-unstyled d-flex flex-column justify-content-start ">
                          <li class="d-flex   align-item-end"><i class="  material-icons col-md-2 p-0">home</i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public" class="nolink_foot_map">{{trans('messages.main')}}</a>  </p></li>
                                <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons"> shopping_cart
                        </i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public#catalog" class="nolink_foot_map">{{trans('messages.catalog')}}</a></p></li>
                          <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons">info_outline</i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public/about" class="nolink_foot_map">{{trans('messages.about')}}</a></p></li>
                          <li class="d-flex   align-item-end"><i class="col-md-2 p-0 material-icons">content_paste
                        </i><p class class="col-md-10"><a href=" /{{app()->getLocale()}}/public/contact" class="nolink_foot_map">{{trans('messages.contact')}}</a></p></li>

                        </ul>
                  </div>

                  
                        </div>
        <div class="container-fluid bg-dark w-100 d-flex justify-content-center align-item-end">
 
          <div class="nolink_foot  d-flex justify-content-start p-0">
           {{trans('messages.legacy')}}
          </div>
        </div>
@endsection
@section('footer-md')
 
       <div class=" bg-dark-50 nolink_foot d-flex justify-content-center w-100 h-100 py-2   " id="main-row">
            <div class="col-2 d-flex justify-content-center align-item-center">
                             <i class=" col-2 p-0 material-icons ">home</i>
                             <a href=" /{{app()->getLocale()}}/public" class=" nolink_foot p-0 col-10">{{trans('messages.main')}}</a>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-item-center">
                         <i class=" col-2 p-0 material-icons">shopping_cart</i>
                         <a href=" /{{app()->getLocale()}}/public#catalog" class=" col-10 nolink_foot p-0">{{trans('messages.catalog')}}</a>
                     </div>
                    <div class="col-2 d-flex justify-content-center align-item-center">
                         <i class=" col-2 p-0 material-icons">info_outline</i>
                         <a href=" /{{app()->getLocale()}}/public/about" class=" col-10 nolink_foot p-0">{{trans('messages.about')}}</a>
                     </div>
                     <div class="col-2 d-flex    justify-content-start align-item-center">
                                         <i class=" col-2 p-0 material-icons">content_paste</i>
                                         <a href=" /{{app()->getLocale()}}/public/contact" class=" col-10 nolink_foot  p-0">{{trans('messages.contact')}}</a>
                   </div>
                </div>
        <div class="container-fluid bg-dark w-100 d-flex justify-content-center align-item-end">
          <div class="nolink_foot  d-flex justify-content-start p-0">
            {{trans('messages.legacy')}}
          </div>
        </div>
@endsection