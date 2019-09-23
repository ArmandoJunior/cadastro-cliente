<?php

namespace App\Http\Requests;

use App\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $marital_status = implode(',', array_keys(Client::MARITAL_STATUS));
        return [
            'name'              => 'required|max:255',
            'phone'             => 'required|max:50',
            'email'             => 'required|max:100',
            'date_birth'        => 'required|date',
            'sex'               => 'required|in:m,f',
            'marital_status'    => "required|max:1|in:$marital_status",
            'company_name'      => 'max:255',
            'image'             => 'required|image',
        ];
    }
}
