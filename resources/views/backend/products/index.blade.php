@extends("backend.shared.backend_theme")
@section("title","Ürün Modülü")
@section("subtitle","Ürünler")
@section("btn_url",url("/products/create"))
@section("btn_label","Yeni Ekle")
@section("btn_icon","plus")
@section("content")
    <table class="table table-bordered table-striped table-sm text-center">
        <thead>
        <tr>
            <th scope="col">Ürün Adı</th>
            <th scope="col">Stok Kodu</th>
            <th scope="col">Oem Numarası</th>
            <th scope="col">Kategori</th>
            <th scope="col">Marka</th>
            <th scope="col">Stok</th>
            <th scope="col">Maliyet Fiyatı</th>
            <th scope="col">Satış Fiyatı</th>
            <th scope="col">Satış Türü</th>
            <th scope="col">Durum</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        @if(count($products) > 0)
            @foreach($products as $product)
                <tr id="{{$product->product_id}}">
                    <td>{{$product->name}}</td>
                    <td>{{$product->stock_code}}</td>
                    <td>{{$product->oem_number}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->brand->name}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->cost_price}} ₺</td>
                    <td>{{$product->price}} ₺</td>
                    <td>
                        @if($product->status == 1)
                            <span class="badge bg-danger">2. El ( Çıkma ) </span>
                        @else
                            <span class="badge bg-warning">Sıfır</span>
                        @endif
                    </td>
                    <td>
                        @if($product->sales_format == 1)
                            <span class="badge bg-danger">Takım</span>
                        @else
                            <span class="badge bg-warning">Adet</span>
                        @endif
                    </td>
                    <td>
                        @if($product->is_active == 1)
                            <span class="badge bg-success">Aktif</span>
                        @else
                            <span class="badge bg-danger">Pasif</span>
                        @endif
                    </td>
                    <td>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/products/$product->product_id/edit")}}">
                                   <i class="bi bi-pencil-fill" style="font-size: 15px;"></i>
                                    Güncelle
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link list-item-delete text-black"
                                   href="{{url("/products/$product->product_id")}}">
                                   <i class="bi bi-trash3-fill" style="font-size: 15px;"></i>
                                    Sil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black"
                                   href="{{url("/products/$product->product_id/images")}}">
                                   <i class="bi bi-image" style="font-size: 15px;"></i>
                                    Fotoğraflar
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="11">
                    <p class="text-center">Herhangi bir ürün bulunamadı.</p>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
@endsection