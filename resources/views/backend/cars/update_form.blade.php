@extends("backend.shared.backend_theme")
@section("title","Araba Modülü")
@section("subtitle","Araba Güncelle")
@section("btn_url",url()->previous())
@section("btn_label","Geri Dön")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url("/cars/$car->car_id")}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="car_id" value="{{$car->car_id}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Araba Adı" placeholder="Araba adı giriniz" field="name"
                             value="{{$car->name}}"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Slug" placeholder="Slug giriniz" field="slug" value="{{$car->slug}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <x-checkbox field="is_active" label="Aktif Araba" checked="{{$car->is_active == 1}}"/>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> KAYDET</button>
            </div>
        </div>
    </form>
@endsection