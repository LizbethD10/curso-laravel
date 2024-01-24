<?php

namespace App\Http\Requests\Category;

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

    /**
     * Determine if the user is authorized to make this request.
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return $this->myRules();
    }
}
