@extends('layouts.app')

<!-- navcontent -->
@section('navcontent')
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a class="page-scroll" href="/">Trang chủ</a></li>
        <li><a class="page-scroll" href="#about">Giới thiệu</a></li>
        <li><a class="page-scroll" href="#tour">Điểm đến</a></li>
        <li><a class="page-scroll" href="#social">Chia sẻ</a></li>
        <li><a class="page-scroll" href="#contact">Đóng góp</a></li>
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

<!-- navcontent -->
@section('content')

<div id="intro-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#intro-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#intro-carousel" data-slide-to="1"></li>
        <li data-target="#intro-carousel" data-slide-to="2"></li>
        <li data-target="#intro-carousel" data-slide-to="3"></li>
        <li data-target="#intro-carousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" style="background-image: url(https://s3-eu-west-1.amazonaws.com/layanademo/s1-min.jpg); ">
          <!-- <img src="{{asset('images/s1.jpg')}}" alt="" style="width: 100%; height: 100%"> -->
          <div class="carousel-caption">
            <h1>Khám phá du lịch Hà Nội</h1>
            <a href="/create" class="btn btn-ghost btn-lg">Tạo tour</a>
            
          </div>
        </div>
        <div class="item" style="background-image: url(https://s3-eu-west-1.amazonaws.com/layanademo/s2-min.jpg);">
          <!-- <img src="{{asset('images/s2.jpg')}}" alt="" style="width: 100%; height: 100%"> -->
          <div class="carousel-caption">
            <h1>Hồ Gươm</h1>
            <a href="/create" class="btn btn-ghost btn-lg">Tạo tour</a>
            
          </div>
        </div>
        <div class="item" style="background-image: url(https://s3-eu-west-1.amazonaws.com/layanademo/s3-min.jpg);">
          <!-- <img src="{{asset('images/s3.jpg')}}" alt="" style="width: 100%; height: 100%"> -->
          <div class="carousel-caption">
            <h1>Cầu Long Biên</h1>
            <a href="/create" class="btn btn-ghost btn-lg">Tạo tour</a>
            
          </div>
        </div>
      </div>

      <!-- Control slide -->
      <a class="left carousel-control" href="#intro-carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#intro-carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
  
  <!-- intro -->
  <section id="about">
    <div class="container">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="section-heading">Hà Nội</h2>
        <hr>
        <p>
          Hà Nội là thủ đô của nước Cộng hoà Xã hội chủ nghĩa Việt Nam và cũng là kinh đô của hầu hết các vương triều Việt trước đây. Do đó, lịch sử Hà Nội gắn liền với sự thăng trầm của lịch sử Việt Nam qua các thời kỳ.
        </p>
        <hr>
        <p>
          Hà Nội nằm giữa đồng bằng sông Hồng trù phú, nơi đây đã sớm trở thành 1 trung tâm chính trị, kinh tế và văn hóa ngay từ những buổi đầu của lịch sử Việt Nam. Năm 1010, vua Lý Thái Tổ, vị hoàng đế đầu tiên của nhà Lý, quyết định xây dựng kinh đô mới ở vùng đất này với cái tên Thăng Long. Trong suốt thời kỳ của các triều đại Lý, Trần, Lê, Mạc, kinh thành Thăng Long là trung tâm văn hóa, giáo dục và buôn bán của cả nước. Khi Tây Sơn rồi nhà Nguyễn lên nắm quyền trị vì, kinh đô được chuyển về Huế và Thăng Long bắt đầu mang tên Hà Nội từ năm 1831, dưới thời vua Minh Mạng.
        </p>
      </div>
    </div>
  </section>

  <!-- places -->
  
  <section id="tour">
    <div class="container">
      <div class="col-lg-10 col-lg-offset-1 text-center">
        <h2 class="section-heading">Điểm đến</h2>
        <hr>
      </div>
      <div class="row list-tours">
        @include('sections.places')
      </div>
    </div>
  </section>

  <!-- social -->
  <section id="social" class="parallax parallax-image" style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/11/2015/09/15223245/glamour-678834_1280.jpg); background-position: 50% 68px;">
    <div class="container">
      <div class="parallax-content">
        <div class="row">
          <div class="col-md-4">
            <div class="funfacts text-center">
              <div class="icon">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </div>
              <h4>Twitter</h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfacts text-center">
              <div class="icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </div>
              <h4>Facebook</h4>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfacts text-center">
              <div class="icon">
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </div>
              <h4>Google+</h4>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2 class="section-heading">Đóng góp</h2>
          <hr>
          <p>
            Bạn có ý kiến phản hồi? Thật tuyệt vời, hãy gửi cho chúng tôi!
          </p>
          <div class="ideaform">
            <div class="error"></div>
            <form method="POST" action="">
              <input type="text" name="name" class="col-md-6 norightborder" placeholder="Tên của bạn *">
              <input type="email" name="email" class="col-md-6" placeholder="Email của bạn *">
              <textarea name="comment" class="col-md-12" placeholder="Ý kiến của bạn *"></textarea>
              <input type="submit" name="submit" class="contact submit btn btn-primary btn-xl" value="Gửi đi">
            </form>
          </div>

        </div>
        
      </div>
    </div>
  </section>
@endsection