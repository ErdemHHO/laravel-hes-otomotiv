@extends("backend.shared.backend_theme")
@section("title","Kullanıcı Modülü")
@section("subtitle","Kullanıcılar")
@section("button","Yeni Kullanıcı Ekle") 
@section("add_new_url",url("/users/create")) 
@section("content")
  <table class="table teble-responsive table-bordered mt-5">
      <thead class="text-center">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Ad Soyad</th>
          <th scope="col">E-Posta</th>
          <th scope="col">Telefon</th>
          <th scope="col">Şehir</th>
          <th scope="col">İlçe</th>
          <th scope="col">Adres</th>
          <th scope="col">Durum</th>
          <th scope="col">İşlemler</th>
        </tr>
      </thead>
    
      <tbody class="text-center"> 
        @if(count($users)>0)
          @foreach($users as $user)
            <tr id="{{$user->user_id}}">
              <td>{{$loop->iteration}}</td>
              <td>{{ $user -> name}} {{ $user -> surname}}</td>
              <td>{{ $user -> email}}</td>
              <td>{{ $user -> phoneNumber}}</td>
              <td>{{ $user -> city}}</td>
              <td>{{ $user -> ilce}}</td>
              <td>{{ $user -> address}}</td>
              <td>
                @if($user -> is_active==1)
                  <span class="badge bg-success">Aktif </span>
                @else  
                  <span class="badge bg-danger">Pasif </span>
                  @endif
              </td>
              <th scope="col">
                <ul class="nav float-start">
                  <li class="nav-item">
                    <a class="nav-link text-black" href="{{url("/users/$user->user_id/edit")}}">
                      <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                      Güncelle
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black list-item-delete" href="{{url("/users/$user->user_id")}}">
                      <i class="bi bi-trash3-fill" style="font-size: 15px;"></i>
                      Sil
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black " href="{{url("/users/$user->user_id/change-password")}}">
                      <i class="bi bi-key-fill" style="font-size: 15px;"></i>
                      Şifre Değiştir
                    </a>
                  </li>
                </ul>
              </th>
            </tr>
          @endforeach
        @else
            <tr>
              <td colspan="9"><p class="text-center">Herhangi Bir Kullanıcı Bulunamadı</p></td>
            </tr>
        @endif
      </tbody>
  </table>

@endsection



