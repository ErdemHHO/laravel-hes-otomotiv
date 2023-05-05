<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
{
   
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $user_id=$this->request->get("user_id");
        return [
            "name"=>"required|sometimes|min:3",
            "surname"=>"required|sometimes|min:3",
            "email"=>"required|sometimes|email|unique:App\Models\User,email,$user_id",
            "password"=>"required|sometimes|string|min:5|confirmed",
            "phoneNumber" => "required|sometimes|regex:/^5[0-9]{9}$/|unique:App\Models\User,phoneNumber,$user_id"
        ];
    }



    public function messages()
    {
    return [
    "name.required" => "Bu alan zorunludur.",
    "name.min" => "Ad alanı en az 3 karakterden oluşmalıdır.",
    "surname.required" => "Bu alan zorunludur.",
    "surname.min" => "Soyad alanı en az 3 karakterden oluşmalıdır.",
    "email.unique" =>"Bu E-Posta adresi başka bir kullanıcıya ait.",
    "email.required" => "Bu alan zorunludur.",
    "email.email" => "Girdiğiniz değer eposta formatına uygun olmalıdır.", 
    "password.required" => "Bu alan zorunludur.",
    "password.min" => "Şifre alanı en az 5 karakterden oluşmalıdır.",
    "password.confirmed" => "Girilen şifreler aynı değildir.", "password_confirmed.required" => "Bu alan zorunludur.",
    "phoneNumber.regex" => "Lütfen Telefon Numaranızı Düzgün Giriniz",
    "phoneNumber.unique" =>"Bu telefon numarası başka bir kullanıcıya ait.",
    ];
}
protected function passedValidation()
{
    if ($this->request->has("password")) {
        $password = $this->request->get("password");
        $this->request->set("password", Hash::make($password));
    }
}

}
