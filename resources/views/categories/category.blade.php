@include('layouts.navbar')
@section('category_content')
@yield('dash_navbar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Категорії</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-outline-info"><a href="../../admin/categories/add">Додати</a></button>
            </div>
          </div>
          <div class="table-responsive">
                 <div class="album py-5 bg-light">
                    <div class="container">
                      <div class="row">
                        @foreach($categories as $category)
                        <div class="col-md-4">
                          <div class="card mb-4 shadow-sm">
                            <div class="card-head"><b class="cat-name">{{$category->ua_name}}</b></div>
                            <img class="card-img-top fixed_size" src="../pics/{{$category->pic}}">
                            <div class="card-body">
                              <p class="card-text">{{$category->ru_name}}</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <a href="../../admin/categories/edit/{{$category->id}}"><button type="button" class="btn btn-sm btn-outline-secondary">Редагувати</button></a>
                                  <a href="../../admin/categories/delete/{{$category->id}}/"><button type="button" class="btn btn-sm btn-outline-secondary delete">Видалити</button></a>
                                </div>
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

