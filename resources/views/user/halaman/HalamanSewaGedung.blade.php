@extends('user.layout.TampilanUser')
@section('content')
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Sewa Gedung</h1>
							<p>...Kalender...</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="{{url('/')}}">Home</a>
									<a href="{{url('sewa')}}">Sewa Gedung</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->
		<br><br><br><br>

		<div class="container">
			<div class="response"></div>
			<div id='calendar'></div>
		</div>
		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">

						<div class="contact-form-section">

				@if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif

							<h1>Formulir Penyewaan Gedung</h1>
							<form class="contact-form-area contact-page-form contact-form text-right" action="{{url('AksiSewa')}}" method="post">
								{{csrf_field()}}
								<div class="form-group col-md-12">
									<table>
										<tr>
											<td>Id Penyewaan	: </td>
											<td>
												<input type="text" class="form-control" id="id_penyewaan" name="id_penyewaan" placeholder="Id Penyewaan" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Id Penyewaan'" value=" S-{{ rand() }}" readonly>
											</td>
										</tr>
									</table>
									
								</div>
								<div class="form-group col-md-12">
									<div class="form-select">
										<select name="gedung">
											<option>Pilih gedung</option>
											@foreach($datas as $gedung)
											<option value="{{$gedung->id_gedung}}">{{$gedung->nama_gedung}}</option>
											@endforeach
										<select>
									</div>
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="datepicker" name="tanggal_sewa" placeholder="Pilih Tanggal Sewa" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Pilih Tanggal Sewa'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="nama_acara" name="nama_acara" placeholder="Masukkan Nama Acara" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Acara'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Masukkan Nama Penyewa" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Penyewa'">
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'">
								</div>
								
								<div class="col-lg-12 text-center">
									
									<button type="Submit" class="genric-btn info circle arrow e-large">SEWA<span class="lnr lnr-arrow-right"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->
		<br><br>		
@endsection