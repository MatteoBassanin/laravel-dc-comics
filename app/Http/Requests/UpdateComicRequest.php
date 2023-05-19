<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title'=>'required|max:50',
            'thumb'=>'required|max:255',
            'price'=>'required|max:10',
            'series'=>'required|max:50',
            'sale_date'=>'required',
            'type'=>'required|max:20',
        ];
    }

    public function messages(){
        return[
            'title.required' => "Titolo richiesto",
            'title.max' => "Caratteri massimi da inserire sono 50",
            'thumb.required' => "Url richiesto",
            'thumb.max' => "Caratteri massimi da inserire sono 255",
            'price.required' => "Prezzo richiesto",
            'price.max' => "Caratteri massimi da inserire sono 10",
            'series.required' => "Serie richiesta",
            'series.max' => "Caratteri massimi da inserire sono 50",
            'sale_date.required' => "Data richiesta",
            'type.required' => "Tipo richiesto",
            'type.max' => "Caratteri massimi da inserire sono 20",
        ];
    }
}

