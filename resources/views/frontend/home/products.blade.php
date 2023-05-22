
@extends("frontend.shared.frontend_theme")
@section("content")

<main class="m-5 bg-white p-3">
	@foreach($products as $product)
	<div class="container">
		<div class="baslik m-5">
			<h3 class="text-center">
				{{$product->name}}
				<hr>
			</h3>
		</div>
		<div class="foto mt-5 p-3">
			<div class="row">
				<div class="col-md-6 d-flex justify-content-center">
					
					<div class="gallery">
						@foreach ($product->images as $index => $image)
						<span>
						  <img src="{{ asset('/storage/products/'.$image->image_url) }}" alt="{{ $image->alt }}">
						</span>
					  @endforeach
					</div>
				  </div>
				<div class="col-md-6">
					<br>                      
					<ul>
						<li><strong>{{$product->name}}</strong></li>
						<br>
						<li><strong>ARABA:</strong> 3 SERİSİ E90 </li>
						<li><strong>ALT KATEGORİ:</strong>{{$product->category->name}}</li>
						<li><strong>ÜRÜN NO:</strong> {{$product->stock_code}} </li>
						<li><strong>OEM NO:</strong>  {{$product->oem_number}} </li>
						<li><strong>FİYAT:</strong>  {{$product->price}} </li>
						<li><strong>DURUM:</strong>
						@if($product->status == 1)
                            <span >2. El ( Çıkma ) </span>
                        @else
                            <span >Sıfır</span>
                        @endif
					</li>
						<li><strong>MARKA:</strong>  {{$product->brand->name}}</li>
						<br>
						<li><button type="button" class="btn btn-success"><i class="bi bi-bag-check-fill"></i> Sepete Ekle</button></li>
					</ul>
				</div>
			</div>  
		</div>
	</div>
	<br><br>
	<div class="col-12 mt-5">
		<h4 class="text-center">
			ÜRÜN AÇIKLAMASI
			<hr>
		</h4>
		<br>
		<ul> 
			<li>Resmi tatiller dışında gün içinde 16.00'a kadar yaptığınız tüm satın almalarda aldığınız her ürün aynı gün içinde anlaşmalı kargo şirketine teslim edilerek bir şekilde adresinize sevk edilir.</li>
			<li>						
			@if($product->sales_format == 1)
				Takım 
			@else
				Adet
			@endif
			Fiyatıdır
			</li>
			<li>Detaylı bilgi için Whatsapp: 05*********</li>
			<li>{{$product->description}}</li>
		</ul>
	</div>
	@endforeach
	
{{-- <section class="py-5 d-none d-md-flex">
	<section class="container bg-white p-5">
	   <h2 class="text-center">BENZER ÜRÜNLER</h2>
	   <hr>
	   <div class="parts__container container">
		<div class="owl-theme owl-carousel">
			<div class="item">
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
						<a href="parca1.html" class="btn details m-1">Detay Gör</a>
					</div>		
				</div>
			</div>
			<div class="item">
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
						<a href="parca1.html" class="btn details m-1">Detay Gör</a>
					</div>		
				</div>
			</div>
			 <div class="item">
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
						<a href="parca1.html" class="btn details m-1">Detay Gör</a>
					</div>	
				</div>
			 </div>
			 <div class="item">
			 </div>
			 <div class="item">
				<div class="box">
					<img src="images/kilit.png" alt="car part">
					<h3>BMW ÖN KAPI KİLİDİ E90 E70 F01 F12 SOL OEM. 51217202143 </h3>
					<span class="price">990 TL</span>
					<div class="part-text">
						<p class="part-text">
							ÜRÜN NO: 7704 <br>
							OEM NO: 33531136395 <br>
							DURUM: SIFIR <br>
							MARKA: Wender Parts <br>
						</p>
					</div>
					<div class="buttons">
						<a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
						<a href="parca1.html" class="btn details m-1">Detay Gör</a>
					</div>	
				</div>
			 </div>
		  </div>
	   </div>   
	</section>
 </section> --}}

</main>

@endsection
	