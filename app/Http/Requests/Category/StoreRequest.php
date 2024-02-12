<?php

namespace App\Http\Requests\Category;


use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;


class StoreRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            
            'slug'=> str($this->slug)->slug()
        ]);
    }
    public function authorize(): bool
    {
        return true;
    }
    static public function myRules()  
    {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:255|unique:posts",
           
        ];
        
    }
    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this->expectsJson()){
            $response = new Response($validator->errors(), 422);
            throw new ValidationException($validator, $response);
        }
    }

    public function rules()
    {
        return $this->myRules();
    }
}
