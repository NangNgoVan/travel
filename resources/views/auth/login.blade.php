@extends('layouts.app')

<!-- navcontent -->
@section('navcontent') 
   <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="/">Trang chủ</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signup">Đăng ký</a></li>
        <li class="active"><a href="/login">Đăng nhập</a></li>
            <li><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>
@endsection

<!-- bodycontent -->
@section('content')
	<section id="signin">
	    <div class="container">
	      <div class="row">
	        <div class="col-lg-6 col-lg-offset-3 text-center">
	          <h2 class="section-heading">Đăng nhập</h2>
	          <hr>
	           <p>
	            Bạn đã có tài khoản, đăng nhập!
	          </p>
	          <div class="ideaform">
	            <div class="error"></div>
	            <form method="POST">
	            	{{ csrf_field() }}
	              <input type="text" name="phone" class="col-md-12" placeholder="Số điện thoại của bạn *">
	              <input type="password" name="password" class="col-md-12" placeholder="Mật khẩu *">
	              <input type="submit" name="submit" class="contact submit btn btn-primary btn-xl" value="Đăng nhập">
	            </form>
	          </div>

	        </div>
	        
	      </div>
	    </div>
 	</section>
@endsection