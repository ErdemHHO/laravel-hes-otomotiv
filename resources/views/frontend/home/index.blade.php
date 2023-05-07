<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Website of CarsInc, a car and spare parts sale company">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('front/css/app.css')}}" rel="stylesheet">

	<title>HES OTOMOTIV</title>
</head>
<body>
	<!-- Header -->
	<header class="header">
		<nav class="nav container">
			<i class="fas fa-bars" id="menu-icon"></i>
			<a href="#" class="logo"><span>BMW MINI </span>Oto Yedek Parçaları</a>
			<ul class="nav__links">
				<li><a href="anasayfa.html" class="active">Anasayfa</a></li>
				<li><a href="hakkımızda.html">HAKKIMIZDA</a></li>
				<li><a href="vizyon.html">VİZYON</a></li>
				<li><a href="iletişim.html">İLETİŞİM</a></li>
				<li class="whatsapp"><a href="#blog"><i class="fa fa-whatsapp"> WhatsApp</i></a></li>
			</ul>
			<i class="fas fa-search" id="search-icon"></i>
			<!-- Search box -->
			<div class="search__box container">
				<input type="search" id="search" placeholder="Parça Ara">
			</div>
		</nav>
	</header>

	<main>
		
		<!-- Home section -->
		<section class="home" id="home">
			<div class="row">
				<div class="col-5 ps-5 pt-5"> 
                    
					<ul class="pt-5">
                        @foreach($series as $seri)
                            <li {{ $seri->seri_id }}>
                                <div class="btn-group dropend">
                                    <button type="button" class="btn dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                        <strong>
                                            {{ $seri->name }}
                                        </strong>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @foreach($seri->car as $car)
                                            <li><a class="dropdown-item" href="/{{ $car->slug }}">{{ $car->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>				
				</div>
				</div>
				<div class="col-7 araba ">
					<img src="{{ asset('front//images/bmwpng.png') }}" alt="">
				</div>
			</div>
		</section>

		<!-- Cars section -->
		{{-- <section class="cars" id="cars">
			<div class="heading">
				<h4>
					<span>ARABALAR</span>
				</h4>
			</div>

            <!-- Cars container -->
			<div class="cars__container container">
				<!-- Box 1 -->
				<div class="box">
					<img src="{{ asset('front/images/1serisi.jpg') }} "alt="1 Serisi">
					<h3>1 Serisi</h3>
				</div>

				<!-- Box 2 -->
				<div class="box">
					<img src="{{ asset('front/images/2-serisi.jpg') }}"  alt="2 Serisi">
					<h3>2 Serisi</h3>
				</div>

				<!-- Box 3 -->
				<div class="box">
					<img src="{{ asset('front/images/2022-bmw-3er-limousine.jpg') }}" alt="3 Serisi">
					<h3>3 Serisi</h3>
				</div>

				<!-- Box 4 -->
				<div class="box">
					<img  src="{{ asset('front/images/2022-bmw-m440i-xdrive-gran-coupe-exterior.jpg') }}" alt="4 Serisi">
					<h3>4 Serisi</h3>
				</div>

				<!-- Box 5 -->
				<div class="box">
					<img  src="{{ asset('front/images/yeni-bmw-520i-fiyat-1.jpg') }}" alt="5 Serisi">
					<h3>5 Serisi</h3>
				</div>

				<!-- Box 6 -->
				<div class="box">
					<img  src="{{ asset('front/images/yeni-bmw-6-serisi-gt-034.jpg') }}" alt="6 Serisi">
					<h3>6 Serisi</h3>
				</div>
				<!-- Box 6 -->
				<div class="box">
					<img  src="{{ asset('front/images/2022-bmw-7-serisi-tanitildi-iste-tasarimi-ve-ozellikleri147647_0.jpg')}}" alt="7 Serisi">
					<h3>7 Serisi</h3>
				</div>
				<!-- Box 6 -->
				<div class="box">
					<img  src="{{ asset('front/images/bmw-serie-8-gran-coupe-2020.jpg') }}" alt="8 Serisi">
					<h3>8 Serisi</h3>
				</div>
				<a href="http://example.com/x-serisi">
                    <div class="box">
                      <img src="{{ asset('front/images/BMW_X5-2017.jpg')}}" alt="X Serisi">
                      <h3> X Serisi</h3>
                    </div>
                </a>
                  
				<div class="box">
					<img  src="{{ asset('front/images/bmw-z4-roadster_4161_2.jpg') }}" alt="Z Serisi">
					<h3> Z Serisi</h3>
				</div>
				<div class="box">
					<img  src="{{ asset('front/images/heuyj8qbr85w_800.jpg') }}" alt="Mini Cooper">
					<h3> Mini Cooper</h3>
				</div>
			</div>
		</section> --}}

		<div class="container">
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="PARÇA ARAYIN" aria-label="Search">
				<button class="btn btn-outline-primary" type="submit">ARA</button>
			</form>
		</div>

		<section class="parts" id="parts">
			<div class="heading">
				<h2>Yeni Gelenler</h2>
			</div>

			<!-- Parts container -->
			<div class="parts__container container">
				<!-- Box 1 -->
				<div class="box">
					<img src="images/e90Tampon.png" alt="car part">
					<h3>Engine</h3>
					<span class="price">5000 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7762 <br>
							OEM NO: 51117136632 <br>
							DURUM: SIFIR <br>
							MARKA: Wender Parts <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="parca1.html" class="btn details m-1">Detay Gör</a>
					</div>		
				</div>
				<div class="box">
					<img src="images/51237291089_min.jpg" alt="car part">
					<h3>BMW 3 SERİSİ E90 KAPUT AYAR TAKOZU OEM: 51237291089</h3>
					<span class="price">350 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7719 <br>
							OEM NO: 51237291089 <br>
							DURUM: SIFIR <br>
							MARKA: Wender Parts <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="#" class="btn details m-1">Detay Gör</a>
					</div>		
				</div>
				<div class="box">
					<img src="images/bardaklık.jpg" alt="car part">
					<h3>BMW BARDAKLIK 3 SERİSİ E90 OEM 51168190205 </h3>
					<span class="price">575 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7711 <br>
							OEM NO: 51168190205 <br>
							DURUM: SIFIR <br>
							MARKA: BTAP GERMANY <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="#" class="btn details m-1">Detay Gör</a>
					</div>	
				</div>
				<div class="box">
					<img src="images/bmw-sis-fari-e60-l-1no010345-021-63176910792__0301338475641810.jpg" alt="car part">
					<h3>BMW SİS FARI E60 E90 E83 OEM: 63176910792</h3>
					<span class="price">350 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7701 <br>
							OEM NO: 63176910792 <br>
							DURUM: SIFIR <br>
							MARKA: Wender Parts <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="#" class="btn details m-1">Detay Gör</a>
					</div>	
				</div>
				<div class="box">
					<img src="images/211417805813 - 2.jpg" alt="car part">
					<h3>BMW YAĞ POMPASI E46/E60/E87/E90 M47n OEM. 11417805813</h3>
					<span class="price">8225 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7799 <br>
							OEM NO: 11417805813 <br>
							DURUM: SIFIR <br>
							MARKA: BMW<br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="#" class="btn details m-1">Detay Gör</a>
					</div>	
				</div>
				<div class="box">
					<img src="images/71o-cpmsTLL.jpg" alt="car part">
					<h3>BMW VAKUM POMPASI E60 E65 E90 N52 OEM. 11667519457</h3>
					<span class="price">2380 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7702 <br>
							OEM NO: 11667519457 <br>
							DURUM: SIFIR <br>
							MARKA: PIERBURG <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="#" class="btn details m-1">Detay Gör</a>
					</div>		
				</div>

			</div>
		</section>
		<!-- Blog section -->
		
<section class="py-5 d-none d-md-flex">
	<section class="container ">
	   <h2 class="text-center">Markalar</h2>
	   <div class="owl-theme owl-carousel">
		 <div class="item">
			<div class="col-md-5">
			   <div class="card" style="width: 12rem;height: 10rem;">
				   <img src="{{ asset('front/images/bmww.png') }}" class="card-img-top" alt="...">
			   </div>
			</div>
		 </div>
		 <div class="item">
			<div class="col-md-5">
			   <div class="card" style="width: 12rem;height: 10rem;">
				   <img src="{{ asset('front/images/cooper.png') }}"class="card-img-top" alt="...">
			   </div>
			</div>
		 </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/wender.png') }}" class="card-img-top" alt="...">
				</div>
			 </div>
		  </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/ina.png') }}" class="card-img-top" alt="...">
				</div>
			 </div><!-- .col -->
		  </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/febi.png') }}" class="card-img-top" alt="...">
				</div>
			 </div><!-- .col -->
		  </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/mahle.png') }}" class="card-img-top" alt="...">
				</div>
		  </div>
		  </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/hella.png') }}" class="card-img-top" alt="...">
				</div>
		  </div>
		  </div>
		  <div class="item">
			 <div class="col-md-5">
				<div class="card" style="width: 12rem;height: 10rem;">
					<img src="{{ asset('front/images/valeo.png') }}" class="card-img-top" alt="...">
				</div>
			 </div>
		  </div>
		  <div class="item">
			<div class="col-md-5">
			   <div class="card" style="width: 12rem;height: 10rem;">
				   <img  src="{{ asset('front/images/nural.png') }}" class="card-img-top" alt="...">
			   </div>
			</div>
		 </div>
		 <div class="item">
			<div class="col-md-5">
			   <div class="card" style="width: 12rem;height: 10rem;">
				   <img src="{{ asset('front/images/Behr-Hella-Logo.png') }}" class="card-img-top" alt="...">
			   </div>
			</div>
		 </div>
		 <div class="item">
			<div class="col-md-5">
			   <div class="card" style="width: 12rem;height: 10rem;">
				   <img src="{{ asset('front/images/luk.png') }}" class="card-img-top" alt="...">
			   </div>
			</div>
		 </div>
	   </div>
	</section>
</section>

	</main>


	<!-- Footer -->
	<footer class="footer">
		<div class="footer__container container">
			<div class="footer__box">
				<a href="#" class="logo"><span>BMW-MINI </span>Oto Yedek Parçaları</a>
				<div class="social__links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="footer__box footer__links">
				<h3>Kurumsal</h3>
				<a href="hakkımızda.html">Hakkımızda</a>
				<a href="iletişim.html">İletişim</a>
				<a href="vizyon.html">Vizyon</a>
			</div>
			<div class="footer__box footer__links">
				<h3>TESLİMAT & İADE</h3>
				<a href="#">Teslimat Bilgileri</a>
				<a href="#">İade & Değişim</a>
				<a href="#">Mesafeli Satış Sözleşmesi</a>
			</div>
			<div class="footer__box footer__links">
				<h3>Admin</h3>
				<a href="#">Admin Girişi</a>
			</div>
		</div>
		<p class="copyright">&copy; Özer Armağan - Erdem Hacıhasanoğlu</p>
	</footer>


	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay:true,
			smartSpeed:1200,
			responsive:{
				0:{
					items:0
				},
				600:{
					items:4
				},
				1000:{
					items:5
				}
			}
		})
	 </script>
</body>
</html>