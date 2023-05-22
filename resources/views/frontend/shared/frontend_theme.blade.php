<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Website of CarsInc, a car and spare parts sale company">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('front/css/app.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fancybox@3.5.7/dist/jquery.fancybox.min.css">

	

	<title>BMW-MINI</title>
</head>
<body>

	<!-- Header -->
	<header class="header">
		<nav class="nav container">
			<i class="fas fa-bars" id="menu-icon"></i>
			<a href="/" class="logo"><span>BMW MINI </span>Oto Yedek Parçaları</a>
			<ul class="nav__links">
				<li><a href="/" class="active">Anasayfa</a></li>
				<li><a href="/hakkimizda">HAKKIMIZDA</a></li>
				<li><a href="/vizyon">VİZYON</a></li>
				<li><a href="/iletisim">İLETİŞİM</a></li>
				<li class="whatsapp"><a href="#blog"><i class="fa fa-whatsapp"> WhatsApp</i></a></li>
			</ul>
			<i class="fas fa-search" id="search-icon"></i>
			<!-- Search box -->
			<div class="search__box container">
				<form class="d-flex" action="{{ route('frontend.search') }}" method="GET">
					<input type="search" id="search" name="search" placeholder="Parça Ara">
					<button type="submit" class="btn btn-outline-primary">ARA</button>
				</form>
			</div>
		</nav>
	</header>


        @yield("content")


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
				<a href="/hakkimizda">Hakkımızda</a>
				<a href="/iletisim">İletişim</a>
				<a href="/vizyon">Vizyon</a>
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
		<p class="copyright">&copy; Erdem Hacıhasanoğlu</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/swiper@6.5.4/swiper-bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="{{asset('front/js/script.js')}}"></script>

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