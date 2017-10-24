<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducts extends FormRequest
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
        return [
            // setting rules for the products
            'product_name' => 'required|alpha|max:100',
            'product_desc' => 'required|alpha|max:300',
            'product_price' => 'required|numeric|digits_between:1,10',
            'Product_image' => 'required|image|mimes:png,jpeg,gif|max:10000'
        ];
    }
}
