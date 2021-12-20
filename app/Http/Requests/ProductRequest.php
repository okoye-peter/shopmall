<?php

namespace App\Http\Requests;

use App\Rules\ProductCountRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','array', new ProductCountRule],
            'name.*' => ['required','string'],
            'description' => ['required','array', new ProductCountRule],
            'description.*' => ['required','string'],
            'price' => ['required','array', new ProductCountRule],
            'price.*' => ['required','numeric'],
            'quantity' => ['required','array', new ProductCountRule],
            'quantity.*' => ['required','integer'],
            'avatar' => ['required','array', new ProductCountRule],
            'avatar.*' => ['required','image', 'max:4000'],
            'id_*' => 'sometimes|string'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'names',
            'name.*' => 'name',
            'description' => 'descriptions',
            'description.*' => 'description',
            'price' => 'prices',
            'price.*' => 'price',
            'quantity' => 'quantities',
            'quantity.*' => 'quantity',
            'avatar' => 'images',
            'avatar.*' => 'image',
        ];
    }
}
