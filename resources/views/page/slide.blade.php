@section('slide')
<div id="mn_slide">		
   		 	<div class="bd-example" >
		  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
		    </ol>
		    <div class="carousel-inner"style="height:400px; border-radius: 10px;">

			<div class="carousel-item active" >
		        <img src="{{ asset('image').'/SLIDE11.jpg' }}" class="d-block w-100" alt=""
				style="width: 908px;height: 420px; filter: blur(2px);">
				<div class="carousel-caption d-none d-md-block">
					<h5>THƯ VIỆN SỐ</h5>
					<p>ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</p>
				</div>
			</div>

			<div class="carousel-item">
			<img src="{{ asset('image').'/SLIDE12.jpg' }}" class="d-block w-100" alt="..."
				style="width: 908px; height: 420px; filter: blur(2px);">
				<div class="carousel-caption d-none d-md-block">
					<h5>THƯ VIỆN SỐ</h5>
					<p>ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</p>
				</div>
			</div>

			<div class="carousel-item">
			<img src="{{ asset('image').'/SLIDE13.jpg' }}" class="d-block w-100" alt="..."
				style="width: 908px; height: 420px; filter: blur(2px);">
				<div class="carousel-caption d-none d-md-block">
					<h5>THƯ VIỆN SỐ</h5>
					<p>ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</p>
				</div>
			</div>

			<div class="carousel-item">
			<img src="{{ asset('image').'/SLIDE14.jpg' }}" class="d-block w-100" alt="..."
				style="width: 908px; height: 420px; filter: blur(2px);">
				<div class="carousel-caption d-none d-md-block">
					<h5>THƯ VIỆN SỐ</h5>
					<p>ĐẠI HỌC CÔNG NGHỆ GIAO THÔNG VẬN TẢI</p>
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

	    </a>
	  </div>
	 </div>
      </div>
  </div>
@endsection

