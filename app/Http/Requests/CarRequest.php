<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class CarRequest extends FormRequest
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
        $car_id=$this->request->get("car_id");
        return [
            "name" => "required",
            "slug" => "required|sometimes|unique:App\Models\Car,slug,$car_id|regex:/^[a-zA-Z0-9-_ ]+$/",
            "seri_id" => "required",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Bu alan zorunludur.",
            "slug.required" => "Bu alan zorunludur.",
            "slug.unique" => "Girdiğiniz :attribute sistemde kayıtlıdır.",
            "slug.regex" => "Slug alanında yabancı karakter ve boşluk kullanılamaz.",
            "category_id.required" => "Bu alan zorunludur.",
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