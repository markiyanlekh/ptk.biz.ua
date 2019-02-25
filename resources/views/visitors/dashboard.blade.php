@extends('layouts.app')
@section('content')
<div style="min-height:500px;" class="container-fluid w-100 d-flex flex-row justify-content-center">
     @include('layouts.navbar')
     @include('visitors.visitor') 
     @yield('navbar')  
     @yield('visitor_content')
</div>    
@endsection
