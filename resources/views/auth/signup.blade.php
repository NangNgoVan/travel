@extends('layouts.app')

<!-- navcontent -->
@section('navcontent')

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="/">Trang chủ</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/login">Đăng ký</a></li>
         <li><a href="/login">Đăng nhập</a></li>
        <li><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>
@endsection

<!-- bodycontent -->
@section('content')
	<section id="signup">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6 col-lg-offset-3 text-center">
	          <h2 class="section-heading">Đăng ký</h2>
	          <hr>
	          <p>
	            Bạn muốn trở thành khách hàng thường xuyên và muốn được hưởng nhiều ưu đãi khi đi du lịch? Hãy đăng ký ngay!
	          </p>
	          @include('errors.errors')
	          <div class="ideaform">
	            <div class="error"></div>
	            <form method="POST">
					{{ csrf_field() }}
	              <input type="text" name="phonenumber" class="col-md-6" placeholder="Số ĐT liên hệ *"></textarea>
	              <input type="email" name="email" class="col-md-6" placeholder="Địa chỉ email *">
	              <input type="text" name="username" class="col-md-12" placeholder="Tên tài khoản *">
	              <input type="password" name="password" class="col-md-12" placeholder="Mật khẩu *">
	              <input type="password" name="password_confirmation" class="col-md-12" placeholder="Xác nhận mật khẩu *">
	              <input type="submit" name="submit" class="contact submit btn btn-primary btn-xl" value="Đăng ký">
	            </form>
	          </div>

	        </div>
	        
	      </div>
	    </div>
 	</section>
@endsection