<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
	<div class="container">
		<div class="navbar-header page-scroll">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" airia-expanded="false" aria-controls="navbar">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search" airia-expanded="false" aria-controls="navbar">
		      <span class="sr-only">Toggle navigation</span>
		      <span>Tìm kiếm</span>
		    </button>
		    <a class="navbar-brand page-scroll">Ha Noi Tour</a>
	    </div>
		@yield('navcontent')
		<div class="row navbar-header" id="search">
			<div class="search-form"  style="padding: 5px;">
		     <form class="form-inline" action="/search">
		     	<div class="col-sm-2">
		     		<div class="form-group">
		            <div class="radio">
					  <label>
					    <input type="radio" name="search-type" id="optionsRadios1" value="1" checked>
					   Tìm tour có sẵn
					  </label>
					</div>
					<div class="radio">
					  <label>
					    <input type="radio" name="search-type" id="optionsRadios2" value="2">
					    Tìm tour đã đăng ký
					  </label>
					</div>
		          </div>
		     	</div>
		     	<div class="col-sm-10">
		     		<div class="form-group">
		            <label for="date">Ngày khởi hành: </label>
		            <input type="date" name="date" class="form-control">
		          </div>
		          <div class="form-group">
		            <label for="price">Giá: </label>
		            <select name="price" class="form-control">
		              <option value="1">dưới 2 triệu</option>
		              <option value="2">từ 2->5 triệu</option>
		              <option value="3">trên 5 triệu</option>
		            </select>
		          </div>
		          <div class="form-group">
		          	<label for="price">Số điện thoại*: </label>
		          	<input type="text" name="phone" class="form-control" placeholder="Nhập SĐT">
		          </div>
		           <button type="submit" class="btn btn-primary">Tìm kiếm</button>
		     	</div> 
		    </form>
		    </div>
		</div>
	</div>
</nav>
