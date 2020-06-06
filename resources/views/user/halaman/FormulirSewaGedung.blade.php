@extends('user.layout.TampilanUser')
@section('content')
		
		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-9 offset-lg-3">

						<div class="contact-form-section">

					<h1>Formulir Penyewaan Gedung</h1><hr>
				@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                  		<table>
                  			<tr>
                  				<td width="400" valign="top">
                  					
							<form class="contact-form-area contact-page-form contact-form text-left" action="{{url('AksiSewa')}}" method="post">
								{{csrf_field()}}
								<div class="form-group col-md-9">
									<label><strong>Id Penyewaan	: </strong></label>
									<input type="text" class="form-control" id="id_penyewaan" name="id_penyewaan" placeholder="Id Penyewaan" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Id Penyewaan'" value=" S-{{ rand() }}" readonly>
									 <hr>
								</div>
								<input type="text" name="gedung" value="{{$datas->id_gedung}}" hidden>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="tanggalan" name="tanggal_sewa" placeholder="Pilih Tanggal Sewa" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Pilih Tanggal Sewa'" required>
								</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="nama_acara" name="nama_acara" placeholder="Masukkan Nama Acara" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Acara'" required>
								</div>

					@if(Session::get('login'))
								<input type="text" name="id_user" value="{{Session::get('id_user')}}" hidden>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Masukkan Nama Penyewa" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Penyewa'" value="{{Session::get('nama')}}" required>
								</div>
								<div class="form-group col-md-9">
									<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'" value="{{Session::get('email')}}" required>
								</div>

					@else
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="nama_penyewa" name="nama_penyewa" placeholder="Masukkan Nama Penyewa" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Penyewa'" required>
								</div>
								<div class="form-group col-md-9">
									<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'" required>
								</div>
					@endif
								
								
								<div class="col-lg-9 text-center">
									
									<button type="Submit" class="genric-btn info circle arrow e-large">SEWA<span class="lnr lnr-arrow-right"></span></button>
								</div>
							</form>
                  				</td>


                  				<td width="400" valign="top">
                  					<h2 class="mb-20 title_color text-center">{{$datas->nama_gedung}}</h2>
						<a href="{{ url('img/gedung/'.$datas->gambar_gedung) }}" class="img-gal">
								<div class="single-gallery-image" style="background: url({{ url('img/gedung/'.$datas->gambar_gedung) }});"></div>
							</a>
						<hr>

						<div class="form-group">
							<input type="text" class="single-input" value="{{$datas->deskripsi}}" readonly>
						</div>
						<div class="form-group">
							<textarea class="single-input" readonly>{{$datas->alamat}}</textarea>
						</div>
						
						<div class="form-group">
							<input type="text" class="single-input" value="@currency($datas->harga)" readonly>
						</div>
                  				</td>
                  			</tr>
                  		</table>
                  		
						</div>


					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->
		<br><br>		
@endsection