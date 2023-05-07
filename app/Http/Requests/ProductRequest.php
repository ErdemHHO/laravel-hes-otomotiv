<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $product_id=$this->request->get("product_id");
        return [
            "category_id" => "required",
            "brand_id" => "required",
            "oem_number" => "required|regex:/^[a-zA-Z0-9-_ ]+$/|numeric",
            "stock_code" => "required|sometimes|unique:App\Models\Product,stock_code,$product_id",
            "name" => "required|min:3",
            "price" => "required|numeric|min:0",
            "cost_price" => "required|numeric|min:0",
            "stock" => "required|integer|min:0",
            "slug" => "required|sometimes|regex:/^[a-zA-Z0-9-_ ]+$/|unique:App\Models\Product,slug,"
        ];
    }

    public function messages(): array
    {
        return [
            "category_id.required" => "Bu alan zorunludur.",
            "brand_id.required" => "Bu alan zorunludur.",
            "oem_number.required" => "Bu alan zorunludur.",
            "oem_number.regex" => "OEM alanında yabancı karakter ve boşluk kullanılamaz.",
            "oem_numarası.numeric" => "OEM numarası sayısal olmalıdır.",
            "stock_code.required" => "Bu alan zorunludur.",
            "stock_code.unique" => "Bu ürün zaten yüklü.",
            "name.required" => "Bu alan zorunludur.",
            "name.min" => "Bu en az 3 karakterden oluşmaktadır",
            "price.required" => "Bu alan zorunludur.",
            "price.numeric" => "Fiyat Giriniz",
            "price.min" => "Fiyat sıfırdan küçük olamaz",
            "cost_price.required" => "Bu alan zorunludur.",
            "cost_price.numeric" => "Fiyat Giriniz",
            "cost_price.min" => "Fiyat sıfırdan küçük olamaz",
            "stock.required" => "Bu alan zorunludur.",
            "stock.integer" => "Stok bilgisi harf içermemeli",
            "stock.min" => "Stok sıfırdan küçük olamaz",
            "slug.required" => "Bu alan zorunludur.",
            "slug.unique" => "Girdiğiniz :attribute sistemde kayıtlıdır.",
            "slug.regex" => "Slug alanında yabancı karakter ve boşluk kullanılamaz."
        ];
    }

    protected function passedValidation()
    {
        if (!$this->request->has("slug")) {
            $name = $this->request->get("name");
            $slug = Str::of($name)->slug();
            $this->request->set("slug", $slug);
        }
    }
}