<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->product;

        return [
            'name' => 'required|min:6|unique:products,name,' . $id,
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image' => 'image|mimes:jpg,jpeg,JPEG,png,gif|max:1024',
            'description' => 'required|min:50',
        ];
    }
}
