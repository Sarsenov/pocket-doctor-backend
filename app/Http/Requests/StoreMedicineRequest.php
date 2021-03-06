<?php

namespace PockDoc\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicineRequest extends FormRequest
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
            'illness_id' => 'required|exists:illnesses,id',
            'name' => 'required',
            'description' => 'required',
            'schedule' => '',
            'end_date' => 'date',
        ];
    }
}
