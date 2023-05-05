@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Şifre Güncelle")
@section("button","Kullanıcılar") 
@section("add_new_url",url("/users")) 
@section("content")
  <form action="{{url("/users/$user->user_id/change-password")}}" method="POST" autocomplete="off">
    @csrf
    <div class="row mb-3">
      <div class="col-sm-6">
        <label for="password" class="form-label">Şifre</label>
        <input type="password" class="form-control" placeholder="Şifre Girniz" id="password" name="password" value="{{old("password")}}"  required>
        @error("password")
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="col-sm-6">
        <label for="password-confirm" class="form-label">Şifre Tekrar</label>
        <input type="password" class="form-control" placeholder="Şifreyi Tekrar Giriniz" id="password-confirm" name="password_confirmation" value="{{old("password_confirmation")}}" required>
      </div>
    </div>
    <div class="d-grid gap-2">
      <button class="btn btn-primary" type="submit">Kaydet</button>
    </div>
    
  </form>

@endsection





