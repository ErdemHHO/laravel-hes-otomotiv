<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class brandRequest extends FormRequest
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
        $brand_id=$this->request->get("brand_id");
        return [
            "name" => "required",
            "slug" => "required|sometimes|unique:App\Models\Brand,slug,$brand_id|regex:/^[a-zA-Z0-9-_ ]+$/"
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Bu alan zorunludur.",
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