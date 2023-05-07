@extends("backend.shared.backend_theme")
@section("title","Araba Modülü")
@section("subtitle","Arabalar")
@section("btn_url",url("/cars/create"))
@section("btn_label","Yeni Ekle")
@section("btn_icon","plus")
@section("content")
    <table class="table table-bordered table-striped table-sm text-center">
        <thead>
            <tr>
                <th scope="col">Sıra No</th>
                <th scope="col">Adı</th>
                <th scope="col">Slug</th>
                <th scope="col">Durum</th>
                <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <tbody>
        @if(count($cars) > 0)
            @foreach($cars as $car)
                <tr id="{{$car->car_id}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->slug}}</td>
                    <td>
                        @if($car->is_active == 1)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>
                    <td>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/cars/$car->car_id/edit")}}">
                                   <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                                    Güncelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-item-delete text-black"
                                   href="{{url("/cars/$car->car_id")}}">
                                   <i class="bi bi-trash3-fill" style="font-size: 15px;"></i>
                                    Sil
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">
                    <p class="text-center">Herhangi bir araba bulunamadı.</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection