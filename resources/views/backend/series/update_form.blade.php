@extends("backend.shared.backend_theme")
@section("title","Seri Modülü")
@section("subtitle","Seri Güncelle")
@section("btn_url",url()->previous())
@section("btn_label","Geri Dön")
@section("btn_icon","arrow-left")
@section("content")
    <form action="{{url("/series/$seri->seri_id")}}" method="POST" autocomplete="off" novalidate>
        @csrf
        @method("PUT")
        <input type="hidden" name="seri_id" value="{{$seri->seri_id}}">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Seri Adı" placeholder="Seri adı giriniz" field="name"
                             value="{{$seri->name}}"/>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-2">
                    <x-input label="Slug" placeholder="Slug giriniz" field="slug" value="{{$seri->slug}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-2"><span data-feather="save"></span> KAYDET</button>
            </div>
        </div>
    </form>
@endsection