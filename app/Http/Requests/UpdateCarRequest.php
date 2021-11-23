<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
{
    protected $engine = ['diesel', 'petrol', 'electric', 'hybrid'];


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
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|integer',
            'max_speed' => 'required|integer',
            'is_automatic' => 'required|bool',
            'engine' => 'required|in' . implode(',', $this->engine),
            'number_of_doors' => 'required|integer',
        ];
    }
}
