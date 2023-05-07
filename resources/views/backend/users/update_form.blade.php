@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Kullanıcı Bilgilerini Güncelle")
@section("btn_url",url("/users"))
@section("btn_label","Kullanıcılar")
@section("btn_icon","plus")
@section("content")
  <form action="{{url("/users/$user->user_id")}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="user_id" value="{{$user->user_id}}">
    <div class="row mb-3">
      <div class="col-sm-6">
        <x-input label="Ad" placeholder="Ad Giriniz" field="name" value="{{$user->name}}"/>
      </div>
      <div class="col-sm-6 ">
        <x-input label="Soyad" placeholder="Soyad Giriniz" field="surname" value="{{$user->surname}}"/>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-4">
        <x-input label="E-Posta" placeholder="E-Posta Giriniz" field="email" type="email" value="{{$user->email}}"/>
      </div>
      <div class="col-sm-4  mb-3">
        <x-input label="Telefon" placeholder="Telefon Giriniz" field="phoneNumber" value="{{$user->phoneNumber}}"/>
      </div>
      <div class="col-sm-4">
        <div class="row mt-4">
          <div class="col-sm-6">
            <x-checkbox field="is_admin" label="Admin" checked="{{$user->is_admin==1}}"/>
          </div>
          <div class="col-sm-6">
            <x-checkbox field="is_active" label="Aktif" checked="{{$user->is_active==1}}"/>
          </div>
        </div>
                
      </div>
      <div class="col-sm-6 mt-3">
        <x-input label="Şehir" placeholder="Şehir Giriniz" field="city" value="{{$user->city}}"/>
      </div>
      <div class="col-sm-6 mt-3">
        <x-input label="İlçe" placeholder="İlçe Giriniz" field="ilce" value="{{$user->ilce}}"/>
      </div>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Adres</label>
      <input class="form-control pb-5" id="address" name="address" placeholder="Adres Giriniz" rows="3"  value="{{$user->address}}" required>
    </div>

    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Kaydet</button>
    </div>
    
  </form>
@endsection




