<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' =>'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'You should fill the name field!',
            //'email.required' => 'You should fill the email address field!',
            'subject.required' => 'You should fill the subject field!',
            'message.required' => 'You should fill the message field!'
        ];
    }

    public function attributes(){
        return [
            'email' => 'email address'
        ];
    }
}