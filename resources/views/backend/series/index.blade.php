@extends("backend.shared.backend_theme")
@section("title","Seri Modülü")
@section("subtitle","Seriler")
@section("btn_url",url("/series/create"))
@section("btn_label","Yeni Ekle")
@section("btn_icon","plus")
@section("content")
    <table class="table table-bordered table-striped table-sm text-center">
        <thead>
            <tr>
                <th scope="col">Sıra No</th>
                <th scope="col">Adı</th>
                <th scope="col">Slug</th>
                <th scope="col">İşlemler</th>
            </tr>
        </thead>
        <tbody>
        @if(count($series) > 0)
            @foreach($series as $seri)
                <tr id="{{$seri->seri_id}}">
                    <td>{{$loop->iteration}}</td>
                    <td>{{$seri->name}}</td>
                    <td>{{$seri->slug}}</td>
                    <td>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/series/$seri->seri_id/edit")}}">
                                   <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                                    Güncelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-item-delete text-black"
                                   href="{{url("/series/$seri->seri_id")}}">
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
                    <p class="text-center">Herhangi bir seri bulunamadı.</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection