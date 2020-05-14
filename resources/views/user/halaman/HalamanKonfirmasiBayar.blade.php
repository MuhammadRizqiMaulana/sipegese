@extends('user.layout.TampilanUser')
@section('content')
		<br>
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-6">
                                    <h1>Rincian Penyewaan</h1>                               
                                </div>
                                <div class="col-md-6">
                                    <form action="{{url('HalamanKonfirmasiBayar/cari')}}" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="q" class="form-control" placeholder="Kode Penyewaan">
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning" type="submit"><i class="lnr lnr-magnifier"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </article>
                            <hr>
                
                            <article class="row blog_item">
                
                                <div class="col-md-6">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            
                                            <table>
                                                <tr>
                                                    <td>Kode Penyewaan</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="id_penyewaan" class="single-input" value="{{$datas->id_penyewaan}}" disabled></td>

                                                </tr>
                                                <tr>
                                                    <td>Nama Gedung</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="id_gedung" class="single-input" value="{{$datas->Gedung->nama_gedung}}" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Sewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="tanggal_sewa" class="single-input" value="{{$datas->tanggal_sewa}}" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Acara</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="nama_acara" class="single-input" value="{{$datas->nama_acara}}" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Penyewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="nama_penyewa" class="single-input" value="{{$datas->nama_penyewa}}" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Penyewa</td>
                                                    <td> : </td>
                                                    <td><input type="text" name="email_penyewa" class="single-input" value="{{$datas->email_penyewa}}" disabled></td>
                                                </tr>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            <table>
                                                    <tr>
                                                        <td>Harga</td>
                                                        <td> : </td>
                                                        <td>
                                                            <input type="text" name="harga" class="single-input" value="@currency($datas->Gedung->harga)" disabled>
                                                        </td>
                                                    </tr>                                            
                                            </table>
                                            <hr>
                                            <strong>Silahkan Melakukan Pembayaran</Strong>
                                            <b><p>@currency($datas->Gedung->harga)</p></b>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

					<div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Transfer Bank</h3>
                               
                                <div class="media post_item">                                  
										<div class="info_item">
											<table>
                                                <tr>
                                                    <td>
                                                        <strong>Rekening BRI</strong>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        1234567890
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>A / N</strong>
                                                    </td>
                                                    <td>:</td>
                                                    <td>
                                                        Gedung Serbaguna
                                                    </td>
                                                </tr>                                 
                                            </table>
			                        </div>
			                    </div>  
                                <hr>                        
            <form action="AksiKonfirmasiBayar" method="post" enctype="multipart/form-data">

            {{csrf_field()}}    
            <input type="hidden" name="id_penyewaan" class="form-control" value="{{$datas->id_penyewaan}}" >

                                <h3 class="widget_title">Bukti Pembayaran</h3>
                                <div class="text-center">
                                    <table>
                                        <tr>
                                            <td><input type="file" name="bukti_pembayaran" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" class="form-control" name="jumlah_bayar" placeholder="Masukkan Jumlah Transfer"></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <button type="Submit" class="genric-btn danger-border circle arrow text-uppercase">Konfirmasi Pembayaran<span class="lnr lnr-arrow-right"></span></button>
                                </div>

                            </aside>
                </form>        
                         </div>
                      </div>
				</section>
@endsection