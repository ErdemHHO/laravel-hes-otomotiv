
@extends("frontend.shared.frontend_theme")
@section("content")

<main>
	<div class="my-5">
		<div class="kolon container">
			<div class="row">
				<div class="menu col-md-3 my-5 list">
					<div class="list-group">
						<h5 class="text-center p-2">ALT KATEGORİLER</h5>
						@foreach($categories as $categori)
							<a href="/urunler/{{$carSlug}}/{{$categori->slug}}" class="list-group-item list-group-item-action">{{$categori->name}}</a>
						@endforeach
					</div>
				</div>
				<div class="col-md-1 my-5"></div>

					<div class="col-md-8 bg-white my-5">
						<div class="col-12 text-center bg-white p-3" style="height: 100px;">
								<h3>{{$car->name}}</h3>	
						</div>
						<div class="kutu">
							@if ($carImage)
								<img src="{{ asset("/storage/cars/".$carImage->image_url) }}" alt="resim" width="200px" height="400px" />
							@endif
						</div>
						<div class="parts__container container">
							<!-- Box 1 -->
							@foreach($filteredProducts as $product)
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
									<a href="#" class="btn buy m-1"><i class="bi bi-bag-check-fill"></i> Sepete Ekle</a>
									<a href="/urun-detay/{{$product->slug}}" class="btn details m-1">Detay Gör</a>
								</div>      
							</div>
							
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<section class="about container" id="about">
		<div class="about__img">
			<img src="{{ asset('front//images/hakkımızda.png') }}" alt="logo">
		</div>
		<div class="row">
			<div class="col-6">
				<div class="about__text">
					<span>İLETİŞİM:</span>
					<p><strong>Telefon:</strong> 02*********</p>
					<p><strong>GSM:</strong> 05*********</p>
				</div>
			</div>
			<div class="col-6">
				<div class="about__text">
					<span>ADRES:</span>
					<p>Kabaoğlu, Kocaeli Ünv. Kampüsü No:2, 41000 İzmit/Kocaeli</p>
				</div>
			</div>
		</div>
		
	</section>
</main>

@endsection
	