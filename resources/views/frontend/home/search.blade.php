
@extends("frontend.shared.frontend_theme")
@section("content")

<main>
    <div class="my-5">
        <div class="kolon container">
            <div class="row">
				<div class="col-md-3 my-5">
					<ul class="pt-5">
					
						@foreach($series as $seri)
							<li {{ $seri->seri_id }}>
								<div class="btn-group dropend">
									<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
 			
                <div class="col-md-1 my-5"></div>

                <div class="col-md-8 bg-white my-5">
                    <div class="parts__container container">
						<div class="col-12 text-center bg-white p-3" style="height: 100px;">
							<h3>Aramanıza göre {{ count($products) }} adet ürün bulundu</h3>
						</div>						
                        @foreach($products as $product)
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
                                            <span>2. El ( Çıkma )</span>
                                        @else
                                            <span>Sıfır</span>
                                        @endif
                                        <br>
                                        MARKA: {{ $product->brand->name }} <br>
                                    </p>
                                </div>
                                <div class="buttons">
                                    <a href="#" class="btn buy m-1"><i class="bi bi-whatsapp"></i> WhatSapp İle Sipariş</a>
                                    <a href="/urun-detay/{{$product->slug}}" class="btn details m-1">Detay Gör</a>
                                </div>      
                            </div>
                        @endforeach
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
	