@extends('layouts.app')

@section('navcontent')
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="/">Trang chủ</a></li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
      @if(!Auth::check())
        <li><a href="/signup">Đăng ký</a></li>
        <li><a href="/login">Đăng nhập</a></li>
      @else
        <li><a href="">Xin chào {{Auth::user()->name}}</a></li>
      @endif
            <li><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>
@endsection


@section('content')
	<section id="signin">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6 col-lg-offset-3 text-center">
	          <h2 class="section-heading">Tên địa điểm</h2>
	          <hr>
	           <p>
	            Mô tả chi tiết
	          </p>

	      </div>
	    </div>
 	</section>
@endsection

