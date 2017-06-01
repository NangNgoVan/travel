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
		<div class="navbar-header navbar-right" id="search">
			<div class="search-form"  style="padding: 5px;">
		     <form class="form-inline" action="/search">
		     	<div>
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
		          	<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		          </div>
		     	</div> 
		    </form>
		    </div>
		</div>
	</div>
</nav>
