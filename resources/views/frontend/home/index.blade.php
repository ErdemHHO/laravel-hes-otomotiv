
@extends("frontend.shared.frontend_theme")
@section("content")

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
                                            <li><a class="dropdown-item" href="/urunler/{{$car->slug}}">{{ $car->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>				
				</div>
				</div>
				<div class="col-7 araba ">
					<img src="{{ asset('front//images/bmwpng.png') }}" alt="bmw">
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
			<form class="d-flex" role="search" action="{{ route('frontend.search') }}" method="GET">
				<input class="form-control me-2" type="search" name="search" placeholder="PARÇA ARAYIN" aria-label="Search">
				<button class="btn btn-outline-primary" type="submit">ARA</button>
			</form>
		</div>

		<section class="parts" id="parts">
			<div class="heading">
				<h2>Yeni Gelenler</h2>
			</div>

			<!-- Parts container -->
			<div class="parts__container container">
				@foreach($products as $product)
				<!-- Box 1 -->
				<div class="box">
					@if (count($product->images) > 0)
						<img src="{{ asset("/storage/products/".$product->images[0]->image_url) }}" alt="{{ $product->images[0]->alt }}" />
					@endif
					<h3>{{ $product->name }}</h3>
					<span class="price">{{ $product->price }} TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: {{ $product->stock_code }} <br>
							OEM NO: {{ $product->oem_number }} <br>
							DURUM:                         
						@if($product->status == 1)
                            <span>2. El ( Çıkma ) </span>
                        @else
                            <span>Sıfır</span>
                        @endif
							 <br>
							MARKA: {{ $product->brand->name }} <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-bag-check-fill"></i>Sepete Ekle</a>
						<a href="/urun-detay/{{$product->slug}}" class="btn details m-1">Detay Gör</a>
					</div>      
				</div>
				
				@endforeach
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
							<img src="{{ asset('front/images/mahle.jpeg') }}" class="card-img-top" alt="...">
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


@endsection
	