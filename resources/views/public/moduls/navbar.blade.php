@section('navbar')
  <nav class="navbar2  container-fluid px-0 py-1 align-items-center  d-flex justify-content-around">
               
                  <div id="locale-bar" class="col-4  d-flex justify-content-start pl-5 align-items-center ">
                    <span class=" nav-icon material-icons">language</span>
                    <ul class="nav-select d-flex  m-0 justify-content-between align-items-center p-0 ">

<li class="lang current" value="{{app()->getLocale()}}">
                        @if(app()->getLocale()=="uk")
                         ua
                         @else
                          ru
                          @endif </li>                       
                          <ul class=" m-0 p-0 border-0 lang-hidden">
                        
                            <li value="uk" class="lang-li col-9">ua</li>
                            <li value="ru" class="lang-li col-9">ru</li>
                      </ul>
                    </ul>
                  </div>

                   <ul class="col-4  d-flex justify-content-center nav">
                      <li class="nav-item">
                        <a class="nav-link m-sm-2 nolink " href="/{{app()->getLocale()}}/public">{{trans('messages.main')}}</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link m-sm-2 nolink " href="/{{app()->getLocale()}}/public#catalog">{{trans('messages.catalog')}}</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link m-sm-2 nolink" href="/{{app()->getLocale()}}/public/about">{{trans('messages.about')}}</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link m-sm-2 nolink" href="/{{app()->getLocale()}}/public/contact">{{trans('messages.contact')}}</a>
                      </li>
                     </ul>

                     <div id='find' class=" d-flex align-items-end justify-content-end col-4 pr-5  my-lg-0">
                     
                        <span  onclick="openSearch()" id="s-icon" class="material-icons nav-icon">search</span>
                        </div>
                   </nav>
@endsection