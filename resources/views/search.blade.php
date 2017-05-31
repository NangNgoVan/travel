@extends('layouts.app')
<!-- navcontent -->
@section('navcontent')
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a class="page-scroll" href="/">Trang chủ</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/signup">Đăng ký</a></li>
        <li><a href="/login">Đăng nhập</a></li>
            <li><a href="#">Ngôn ngữ</a></li>
        </ul>
    </div>
@endsection

@section('content')
	<section id="search-result">
	<div class="container">
		<div class="row">
      <table class="table">
        <caption><h3>Kết quả tìm kiếm</h3></caption>
        <thead>
          <tr>
            <th>#</th>
            <th>Mã tour</th>
            <th>Ngày khởi hành</th>
            <th>Người đăng ký</th>
            <th>Lịch trình</th>
            <th>Số người lớn</th>
            <th>Số trẻ em</th>
            <th>Mức giá</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tours as $tour)
            <tr>
              <td>#</td>
              <td>{{$tour->id}}</td>
              <td>{{$tour->start_at}}</td>
              <td>{{$tour->name}}</td>
              <td>
                <?php 
                  $array = json_decode($tour->schedule);
                  foreach($array as $key => $item)
                    echo $key.": ".$item->name."<br>";
                ?>
              </td>
              <td>{{$tour->adult_number}}</td>
              <td>{{$tour->childrend_number}}</td>
              <td>#</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      
		</div>
	</div>
		
	</section>
@endsection