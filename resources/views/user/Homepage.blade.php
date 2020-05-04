@extends('user.layout.tampilanUser')
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
						<div class="col-lg-8 col-md-12">
							<p class="top-text">Sewa Gedung Serbaguna</p>
							<h1>Gedung Serbaguna GSG</h1>
							<p>Dengan Pengelola Gedung Serbaguna  yang telah berpengalaman dalam mengkoordinasikan berbagai jenis acara seperti Pernikahan, Resepsi Perkawinan, wisuda, Seminar, Pameran, Peluncuran Produk, Gathering, Gala Dinner, dan Acara Keagamaan dapat membantu mensukseskan acara yang akan anda laksanakan</p>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="#">Explore Menu</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->


		<!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a href="#">Food,</a>
                                            <a class="active" href="#">Technology,</a>
                                            <a href="#">Politics,</a>
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                            <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                            <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>Astronomy Binoculars A Great Alternative</h2>
                                            </a>
                                            <p>MCSE boot camps have its supporters and its detractors. Some people do
                                                not
                                                understand why you should have to spend money on boot camp when you can
                                                get
                                                the MCSE study materials yourself at a fraction.</p>
                                            <a href="single-blog.html" class="blog_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

					<div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Gedung Serbaguna</h3>
                               
                                <div class="media post_item">
                                    <div class="contact_info">
										<div class="info_item">
											<i class="lnr lnr-map-marker"></i>
											<h6>Lohbener, Kabupaten Indramayu</h6>
											<p>Jl. Lohbener lama no.8</p>
										</div>
										<div class="info_item">
											<i class="lnr lnr-phone-handset"></i>
											<h6><a href="#">( 0123 ) 456789</a></h6>
											<p>Senin s.d Jum'at; pukul 09.00 s.d 16.00</p>
										</div>
										<div class="info_item">
											<i class="lnr lnr-envelope"></i>
											<h6><a href="#">kelompok@d4rpl2b.com</a></h6>
											<p>Send us your query anytime!</p>
										</div>
			                        </div>
			                    </div>
                                <div class="br"></div>
                            </aside>
                          	<aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Hubungi</h3>
                                
                                <div class="media post_item">
                                	<h5><strong>Admin 1</strong></h5>
                                    <div class="contact_info">
										<div class="info_item">
											<a href="https://api.whatsapp.com/send?phone=6285270300731&text=Hallo%20mau%20minta%20tolong"><img src="img/tombolwa.png" alt="post"></a>
											<p>085270300731</p>
										</div>
			                        </div>
			                    </div>
			                    <div class="media post_item">
                                	<h5><strong>Admin 2</strong></h5>
                                    <div class="contact_info">
										<div class="info_item">
											<a href="#"><img src="img/tombolwa.png" alt="post"></a>
											<p>082234567890</p>
										</div>
			                        </div>
			                    </div>
                            </aside>  
                         </div>
                      </div>
				</section>

				<!--================ Start Food Gallery Area =================-->
		<section class="section_gap_top food-gallery-area">
			<div class="container-fluid no-padding">
				<div class="row owl-carousel active-food-gallery">
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar3.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar4.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar6.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar8.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar9.jpg" alt="">
					</div>
					<!-- single gallery item -->
					<div class="single-gallery-item">
						<img class="img-fluid" src="img/galeri/gambar11.jpg" alt="">
					</div>
				</div>
			</div>
		</section>
		<!--================ End Food Gallery Area =================-->
@endsection
