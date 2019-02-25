
@include('layouts.navbar')
@section('visitor_content')
@yield('dash_navbar')

 <main role="main" class="col-md-10 ml-sm-auto   px-4">
          <div class="col-12  d-flex justify-content-center flex-column align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Visitors | Views</h1>
            </div>
                    <div class="col-12  d-flex justify-content-center flex-column align-items-center pt-3 pb-2 mb-3 border-bottom">

                      <ul class="w-100 px-0 mr-5 d-flex justify-content-between ">
                          <li class="list-group-item col-3  mx-2 d-flex justify-content-between align-items-center">
                              Unique IP AdDresses (All time):
                            <span class="badge badge-dark badge-pill">{{$count_unique}}</span>
                          </li>
                          <li class="list-group-item mx-2 col-3 d-flex justify-content-between align-items-center">
                              Unique Visiting (Per day):
                            <span class="badge badge-primary badge-pill">{{$count_visit}}</span>
                          </li>
                          <li class="list-group-item mx-2 col-3 d-flex justify-content-between align-items-center">
                              Monthly activity (Current month ):
                            <span class="badge badge-info badge-pill">{{$monthly}}</span>
                          </li>
                          <li class="list-group-item col-3  mx-2 d-flex justify-content-between align-items-center">
                              All Product Views counter:
                            <span class="badge badge-success badge-pill">{{$count_views}}</span>
                          </li>
                        </ul>
            
          </div>
        <div class="col-12  d-flex justify-content-center flex-row align-items-start pt-3 pb-2 mb-3 border-bottom">

          <div class="col-8  d-flex justify-content-center flex-column align-items-center pt-3 pb-2 mb-3 border-bottom">
            
             <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                  <thead>
                    <tr>
                      <th >IP</th>
                      <th>Country</th>
                      <th>City</th>
                      <th>Hits</th>
                      <th>Last visit</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($visitors as $visitor)
                    <tr>
                      <td>{{$visitor->ip}}</td>
                      <td>{{$visitor->country}}</td>
                      <td>{{$visitor->city}}</td>
                      <td>{{$visitor->hits}}</td>
                      <td>{{$visitor->visit_date}}</td>
                  
                    </tr>
                    @endforeach
                  </tbody>
               
                </table>
              </div>  {!! $visitors->render() !!}

          </div>
          <div class="col-4  d-flex justify-content-center flex-column align-items-center pt-3 pb-2 mb-3 border-bottom">

              <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Views</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($views as $view)
                    <tr>
                      <td>{{$view->id}}</td>
                      <td>{{$view->hits}}</td>
                  
                    </tr>
                    @endforeach
                  </tbody>
               
                </table>
              </div>  {!! $visitors->render() !!}</div></div>
        </main>
            
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
