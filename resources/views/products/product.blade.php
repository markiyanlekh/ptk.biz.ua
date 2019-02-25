@include('layouts.navbar')
@section('product_content')
@yield('dash_navbar')

 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Products</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-sm btn-outline-info"><a href="../../admin/products/add">Add</a></button>
            </div>
          </div>

          <div class="table-responsive">
                 <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="card-head"><b class="p-name">{{$product->name}}</b></div>
                <img class="card-img-top fixed_size" src="../public/pics/{{  explode(',',$product->pics)[0]  }}">
                <div class="card-body">
                  <p class="card-text">{{$product->description}}</p>
                  <br>
                  <p class="card-text">{{$product->category}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                                  <a href="../../admin/products/edit/{{$product->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Редагувати</button></a>
                                  <a href="../../admin/products/delete/{{$product->id}}/"><button type="button" class="btn btn-sm btn-outline-secondary delete">Видалити</button></a>
                                </div>
                    <small class="text-muted">
                    	            @foreach($views as $view)
                    	            @if($view->id==$product->id)
                    	            	{{$view->hits." переглядів"}}
                    	            	@endif
                    	            	@endforeach
                    	            	

                    </small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
          </div>
        </main>
            
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
