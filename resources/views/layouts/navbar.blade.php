 @section('dash_navbar')
 <nav class="col-md-2  d-flex bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="../admin/categories">
                  <span data-feather="home"></span>
                  Categories <span class="sr-only"></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../admin/products">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../admin/orders">
                  <span data-feather="users"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../admin/visitors">
                  <span data-feather="users"></span>
                  Visitors
                </a>
              </li>
            </ul>
          </div>
        </nav>
@endsection
@section('app_navbar')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                      <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                              </li>
                         @if(!Auth::check())
                            <li class="nav-item">
                                <a class="nav-link" href="../auth/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../auth/register">Register</a>
                            </li>
                       @elseif(Auth::check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>
                      
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../auth/logout">
                                        Logout
                                    </a> 
                                    <a class="dropdown-item" href="../admin/categories">Categories</a>
                                    <a class="dropdown-item" href="../admin/products">Products</a>
                                    <a class="dropdown-item" href="../admin/orders">Orders</a>
                                    <a class="dropdown-item" href="../admin/visitors">Visitors</a>
                                    
                                </div>
                            </li> @endif
                    </ul>
                </div>
            </div>
        </nav>
@endsection