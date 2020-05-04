@extends('user.layout.TampilanUser')
@section('content')

		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom align-items-center justify-content-center">
			<div class="col-lg-4">
				<div class="video-popup d-flex align-items-center">
					<a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=KUln2DXU5VE" data-animate="zoomIn"
					 data-duration="1.5s" data-delay="0.1s">
						<span><img src="img/banner/play-icon.png" alt=""></span>
					</a>
					<div class="watch">
						<h6>Lihat Video</h6>
						<p>You will love our execution</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<p class="top-text">Sewa Gedung Serbaguna</p>
							<h1>Silahkan Daftar</h1>
							<p>Dengan memiliki akun, akan mempermudah dalam hal penyewaan dan fitur-fitur lainnya</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="{{url('HalamanLoginUser')}}">Sudah Punya Akun</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->
		<br><br><br><br>
		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section">
							<h1>Formulir Register</h1>

							<!------------ Alert----------->

							@if($errors->any())
								<div class="alert alert-danger alert-dismissible" role="alert">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <span aria-hidden="true">&times;</span>
				                    </button>
				                    <ul>
				                    	@foreach ($errors->all() as $error)
				                    	<li>{{$error}}</li>
				                    	@endforeach
				                    </ul>
				            	</div>
				            @endif

				            <!------------ Alert----------->

							<form class="contact-form-area contact-page-form contact-form text-right" action="{{url('registerPost')}}" method="post">

								{{csrf_field()}}

								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'">
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Password'">
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Masukkan Password Confirmation" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Password Confirmation'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Lengkap'">
								</div>
								<div class="form-group col-md-12">
									<input type="number" min="0" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan Nomor Telepon" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nomor Telepon'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Alamat'">
								</div>
								
								<div class="col-lg-12 text-center">
									<input type="submit" class="primary-btn text-uppercase" value="Daftar">
									<input type="reset" class="danger-btn text-uppercase" value="Batal">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->

			<br>	<br>
@endsection