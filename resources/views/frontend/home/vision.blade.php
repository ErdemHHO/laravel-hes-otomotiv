
@extends("frontend.shared.frontend_theme")
@section("content")


<main class="p-5 mt-5"><br>
	<div class="container">
		<div class="mt-5">
			<h4>VİZYON</h4>
			<p>Kaliteli ve garantili ürünlerimizi %100 müşteri memnuniyeti prensipli olarak tüm Türkiye ile buluşturmak</p>
			<h4>MİSYON</h4>
			<p>Doğru kalitere-fiyat oranını sağlayarak, geniş ürün yelpazesiyle tüketici beklentilerini en üst düzeyde karşılamak.</p>
		</div>
	</div><br><br>
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
	