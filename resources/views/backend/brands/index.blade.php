@extends("backend.shared.backend_theme")
@section("title","Marka Modülü")
@section("subtitle","Markalar")
@section("btn_url",url("/brands/create"))
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
        @if(count($brands) > 0)
            @foreach($brands as $brand)
                <tr id="{{$brand->brand_id}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->slug}}</td>
                    <td>
                        @if($brand->is_active == 1)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>
                    <td>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/brands/$brand->brand_id/edit")}}">
                                   <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                                    Güncelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-item-delete text-black"
                                   href="{{url("/brands/$brand->brand_id")}}">
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
                    <p class="text-center">Herhangi bir marka bulunamadı.</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection