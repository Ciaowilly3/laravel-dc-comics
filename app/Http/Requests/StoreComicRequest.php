<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=> "required|min:3|max:20",
            "description"=> "required|min:6|max:255",
            "price"=> "required",
            "series"=> "required",
            "sale_date"=> "required",
            "type"=> "required",
        ];
    }
    public function messages() {
        return [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Descrivimelo sto fumetto!",
            "price.required" => "che lo vuoi gratis?",
            "series.required" => "ma sei series?",
            "sale_date.required" => "inserisci una data",
            "type.required" => "TIPO.",
        ];
    }
}
