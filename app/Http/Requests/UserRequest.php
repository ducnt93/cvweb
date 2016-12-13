<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'inputHo'       =>  'min:3|max:50',
            'inputDiachi'   =>  'min:3|max:50',
            'inputSdt'      =>  'regex:/(0)[0-9]{9}/|min:9|max:14',
            'inputEmail'    =>  'unique:users,email',
            'inputQuequan'  =>  'min:3|max:50',
        ];
    }

    public function messages()
    {
        return [
            "inputHo.min"       =>  'Yêu cầu nhập đúng họ tên mình.',
            "inputHo.max"       =>  "Yêu cầu nhập đúng họ tên mình.",
            "inputDiachi.min"   =>  'Yêu cầu nhập đúng địa chỉ.',
            "inputDiachi.max"   =>  'Yêu cầu nhập đúng địa chỉ.',
            "inputSdt.regex"    =>  'Yêu cầu nhập đúng số điện thoại.',
            "inputSdt.min"      =>  'Yêu cầu nhập đúng số điện thoại.',
            'inputSdt.max'      =>  'Yêu cầu nhập đúng số điện thoại.',
            'inputEmail.unique' =>  'Email vừa nhập đã được sử dụng.',
            'inputQuequan.min'  =>  'Yêu cầu nhập đúng quê quán.',
            'inputQuequan.max'  =>  'Yêu cầu nhập đúng quê quán.'
        ];
    }
}
