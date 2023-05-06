@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Yeni Kullanıcı Ekle")
@section("button","Kullanıcılar") 
@section("add_new_url",url("/users")) 
@section("content")
  <form action="{{url("/users")}}" method="POST" autocomplete="off">
    @csrf
    
    <div class="row mb-3">
      <div class="col-sm-6">
        <x-input label="Ad" placeholder="Ad Giriniz" field="name"/>
      </div>
      <div class="col-sm-6 ">
        <x-input label="Soyad" placeholder="Soyad Giriniz" field="surname"/>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-6">
        <x-input label="E-Posta" placeholder="E-Posta Giriniz" field="email" type="email"/>
      </div>
      <div class="col-sm-6  mb-3">
        <x-input label="Telefon" placeholder="Telefon Giriniz" field="phoneNumber"/>
      </div>
      <div class="col-sm-4">
        <x-input label="Şifre" placeholder="Şifre Giriniz" field="password" name="password"/>
      </div>
      <div class="col-sm-4 ">
        <x-input label="Şifre Tekrar" placeholder="Şifreyi Tekrar Giriniz" field="password_confirmation" name="password"/>
      </div>
      <div class="col-sm-4">
        <div class="row mt-4">
          <div class="col-sm-6">
            <x-checkbox field="is_admin" label="Admin" />
          </div>
          <div class="col-sm-6">
            <x-checkbox field="is_active" label="Aktif" />
          </div>
        </div>
                
      </div>
      <div class="col-sm-6 mt-3">
        <x-input label="Şehir" placeholder="Şehir Giriniz" field="city"/>
      </div>
      <div class="col-sm-6 mt-3">
        <x-input label="İlçe" placeholder="İlçe Giriniz" field="ilce"/>
      </div>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Adres</label>
      <input class="form-control pb-5" id="address" name="address" placeholder="Adres Giriniz" rows="3" value="{{old("address")}}"  required>
    </div>

    <div class="d-grid gap-2">
      <button class="btn btn-success" type="submit">Oluştur</button>
    </div>
    
  </form>

@endsection
