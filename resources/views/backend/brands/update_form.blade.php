@extends("backend.shared.backend_theme")
@section("title","Marka Modülü")
@section("subtitle","Marka Güncelle")
@section("btn_url",url()->previous())
@section("btn_label","Geri Dön")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url("/brands/$brand->brand_id")}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="brand_id" value="{{$brand->brand_id}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Araba Adı" placeholder="Araba adı giriniz" field="name"
                             value="{{$brand->name}}"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Slug" placeholder="Slug giriniz" field="slug" value="{{$brand->slug}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <x-checkbox field="is_active" label="Aktif Araba" checked="{{$brand->is_active == 1}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> KAYDET</button>
            </div>
        </div>
    </form>
@endsection