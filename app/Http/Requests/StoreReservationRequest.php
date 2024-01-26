<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'cliente'=>'required',
            'horario'=>'required',
            'mesa'=>'required',
            'n_pessoas'=>'required',
            'data_reserva'=>'required',
            'estado'=>'required',
            //
        ];
    }
}
