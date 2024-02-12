<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;

class StoreRequest extends FormRequest
{

    protected function prepareForValidation()
    {
        $this->merge([
            //'slug' => Str::slug($this->title),
            //'slug' => Str::of($this->title)->slug()->append("-adicional"),
            'slug'=> str($this->slug)->slug()
        ]);
    }
    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this->expectsJson()){
        $response = new Response($validator->errors(),422);
        throw new ValidationException($validator, $response);
        }
    }

    static public function myRules()  
    {
        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:255|unique:posts",
            "content" => "required|min:7",
            "category_id"=>"required|integer",
            "description" => "required|min:7",
            "posted" => "required"        
        ];
        
    }  
    public function rules()
    {
        return $this->myRules();
    }
   
}
