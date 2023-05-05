@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Kullanıcı Bilgilerini Güncelle")
@section("button","Kullanıcılar") 
@section("add_new_url",url("/users")) 
@section("content")
  <form action="{{url("/users/$user->user_id")}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="user_id" value="{{$user->user_id}}">
    <div class="row mb-3">
      <div class="col-sm-6">
        <label for="name" class="form-label">Ad</label>
        <input type="text" class="form-control" placeholder="Ad Giriniz" id="name" name="name" value="{{$user->name}}" required>
        @error("name")
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="col-sm-6 ">
        <label for="surname" class="form-label">Soyad</label>
        <input type="text" class="form-control" placeholder="Soyad Giriniz" id="surname" name="surname" value="{{$user->surname}}" required>
        @error("surname")
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-sm-4">
        <label for="email" class="form-label">E-posta</label>
        <input type="email" class="form-control" placeholder="E-Posta Giriniz" id="email" name="email" value="{{$user->email}}" required>
        @error("email")
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="col-sm-4  mb-3">
        <label for="phoneNumber" class="form-label">Telefon</label>
        <input type="tel" class="form-control" placeholder="Telefon Giriniz" id="phoneNumber" name="phoneNumber" value="{{$user->phoneNumber}}" required>
        @error("phoneNumber")
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="col-sm-4">
        <div class="row mt-4">
          <div class="col-sm-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="is_admin" id="is_admin"  value="1" {{$user->is_admin==1 ? "checked" : ""}}>
              <label class="form-check-label" for="flexCheckChecked1">
                Admin
              </label>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="is_active" id="is_active"  value="1" {{$user->is_active==1 ? "checked" : ""}}>
              <label class="form-check-label" for="flexCheckChecked2">
                Aktif
              </label>
            </div>
          </div>
        </div>
                
      </div>
      <div class="col-sm-6 mt-3">
        <label for="city" class="form-label">Şehir</label>
        <input type="text" class="form-control" placeholder="Şehir" id="city" name="city"  value="{{$user->city}}" required>
      </div>
      <div class="col-sm-6 mt-3">
        <label for="ilce" class="form-label">İlçe</label>
        <input type="text" class="form-control" id="ilce" placeholder="İlçe" name="ilce"  value="{{$user->ilce}}" required>
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




