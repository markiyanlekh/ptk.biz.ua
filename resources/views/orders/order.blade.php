@include('layouts.navbar')
@section('order_content')
@yield('dash_navbar')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Orders</h1>
            
          </div>

         <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product</th>
                  <th>Name</th>
                  <th>Corp</th>
                  <th>Email</th>
                  <th>Tel Num</th>
                  <th>Size</th>
                  <th>Comment</th>
                  <th>Delete</th>
                  <th style="max-width: 50px!important;">Plain</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->id_product}}</td>
                  <td>{{$order->c_name}}</td>
                  <td>{{$order->c_org}}</td>
                  <td>{{$order->c_email}}</td>
                  <td>{{$order->c_tel}}</td>
                  <td>{{$order->size}}</td>
                  <td>{{$order->comment}}</td>
                  <td><button class=" btn btn-sm  btn-outline-alert"><a href="../../admin/orders/delete/{{$order->id}}/">Del</a></button></td>
                  <td style="max-width: 50px!important;" >{{$order->plain}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
            
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
