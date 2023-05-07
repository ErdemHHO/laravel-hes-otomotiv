@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Şifre Güncelle")
@section("btn_url",url("/users"))
@section("btn_label","Kullanıcılar")
@section("btn_icon","plus")
@section("content")
  <form action="{{url("/users/$user->user_id/change-password")}}" method="POST" autocomplete="off">
    @csrf
    <div class="row mb-3">
      <div class="col-sm-6">
        <x-input type="password" label="Şifre" placeholder="Şifre Giriniz" field="password" name="password"/>
      </div>
      <div class="col-sm-6">
        <x-input type="password" label="Şifre Tekrar" placeholder="Şifreyi Tekrar Giriniz" field="password_confirmation" name="password"/>
      </div>
    </div>
    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Kaydet</button>
    </div>
    
  </form>

@endsection





