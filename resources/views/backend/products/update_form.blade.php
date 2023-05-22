@extends("backend.shared.backend_theme")
@section("title","Ürün Modülü")
@section("subtitle","Ürün Güncelle")
@section("btn_url",url()->previous())
@section("btn_label","Geri Dön")
@section("btn_icon","arrow-left")
@section("content")

    <form action="{{url("/products/$product->product_id")}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="product_id" value="{{$product->product_id}}">
        <div class="row">
            <div class="col-12">
                <div class="mt-2">
                    <x-input label="Ürün Adı" placeholder="Ürün adı giriniz" field="name"  value="{{$product->name}}"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <x-input label="Stok Kodu" placeholder="Stok kodu giriniz" field="stock_code" value="{{$product->stock_code}}"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <x-input label="Oem Numarası" placeholder="Oem numarası giriniz" field="oem_number" value="{{$product->oem_number}}"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <label class="form-label" for="category_id">Kategori Şeçiniz</label>
                    <br/>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="" disabled>Şeçiniz</option>
                        @foreach($categories as $category)
                            <option value="{{$category->category_id}}" {{$product->category_id==$category->category_id ? "selected" : ""}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error("category_id")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <label class="form-label" for="brand_id">Marka Şeçiniz</label>
                    <br/>
                    <select name="brand_id" id="brand_id" class="form-control">
                        <option value="" disabled>Şeçiniz</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->brand_id}}" {{$product->brand_id==$brand->brand_id ? "selected" : ""}}>{{$brand->name}}</option>
                        @endforeach
                    </select>
                    @error("brand_id")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
           
           <div class="mt-2 m-1">
                <p>Seriler</p>
                <div class="form-group">
                    <div class="row">
                        @php
                          $seriProductArray = json_decode($seriProduct, true);
                          $seriIds = array_column($seriProductArray, 'seri_id');
                        @endphp
                            @foreach($series as $seri)
                            @php
                                $checked = '';
                                foreach($seriProductArray as $sp) {
                                    if($sp['pivot']['seri_id'] == $seri->seri_id) {
                                        $checked = 'checked';
                                        break;
                                    }
                                }
                            @endphp
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="seri_id[]"
                                           name="seri_id[]"
                                           value="{{$seri->seri_id}}"
                                           {{$checked}}>
                                    <label class="form-check-label ml-1" for="seri_id">
                                        {{$seri->name}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                      </div>
                      
                    
                </div>
            </div>
            <div class="mt-2 m-1">
                <p>Arabalar</p>
                <div class="form-group">
                    <div class="row">
                        @php
                            $carProductArray = json_decode($carProduct, true);
                        @endphp
                        @foreach($cars as $car)
                            @php
                                $checked = '';
                                foreach($carProductArray as $cp) {
                                    if($cp['car_id'] == $car->car_id) {
                                        $checked = 'checked';
                                        break;
                                    }
                                }
                            @endphp
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="car_id[]"
                                           name="car_id[]"
                                           value="{{$car->car_id}}"
                                           {{$checked}}
                                    >
                                    <label class="form-check-label ml-1" for="car_id">
                                        {{$car->name}}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div> 

            <div class="col-lg-3">
                <div class="mt-2">
                    <x-input type="number" label="Stok" placeholder="Stok giriniz" field="stock" value="{{$product->stock}}"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <x-input label="Maliyet Fiyatı" placeholder="Maliyet giriniz" field="cost_price" value="{{$product->cost_price}}"/>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="mt-2">
                    <x-input label="Satış Fiyatı" placeholder="Satış fiyatı giriniz" field="price" value="{{$product->price}}"/>
                </div>
            </div>
            <div class="col-sm-1 mt-2">
                <x-checkbox field="status" label="Çıkma" checked="{{$product->status==1}}"/>
            </div>
            <div class="col-sm-1 mt-2">
                <x-checkbox field="is_active" label="Aktif" checked="{{$product->is_active==1}}"/>
            </div>
            <div class="col-sm-1 mt-2">
                <x-checkbox field="sales_format" label="Takım Halinde" checked="{{$product->sales_format == 1}}"/>
            </div>
            <div class="col-lg-12">
                <div class="mt-2">
                    <label for="description" class="form-label">Kısa Açıklama:</label>
                        <input type="text"
                            class="form-control pb-5"
                            id="description"
                            name="description"
                            value="{{old("description", "$product->description")}}"
                            placeholder="Kısa açıklama giriniz(Boş geçilebilir.)">
                </div>
            </div>
        </div>


        <div class="col-12 d-grid gap-2 mt-2">
            <button type="submit" class="btn btn-primary"><span data-feather="save"></span> KAYDET
            </button>
        </div>
    </form>

@endsection