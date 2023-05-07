@extends("backend.shared.backend_theme")
@section("title","Araba Modülü")
@section("subtitle","Yeni Araba Ekle")
@section("btn_url",url()->previous())
@section("btn_label","Geri Dön")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url("/cars")}}" method="POST" autocomplete="off" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="mt-2">
                    <x-input label="Araba Adı" placeholder="Araba adı giriniz" field="name"/>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mt-2">
                    <x-input label="Slug" placeholder="Slug giriniz" field="slug" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mt-2">
                    <label class="form-label" for="seri_id">Seri Şeçiniz</label>
                    <br/>
                    <select name="seri_id" id="seri_id" class="form-control">
                        <option value="" disabled>Şeçiniz</option>
                        @foreach($series as $seri)
                            <option value="{{$seri->seri_id}}">{{$seri->name}}</option>
                        @endforeach
                    </select>
                    @error("category_id")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> KAYDET
                </button>
            </div>
        </div>
    </form>
@endsection