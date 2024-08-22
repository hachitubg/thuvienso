<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NganhCreateRequest extends FormRequest
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
            'manganh'               => 'required|min:3|max:20|unique:qltv_nganh', //tên table qtlv_nganh
            'tennganh'              => 'required|min:3|max:500',
        ];
    }
    public function messages() {
        return [
            'manganh.required'      => 'Vui lòng nhập mã ngành',
            'manganh.min'           => 'Vui lòng nhập mã ngành ít nhất 3 ký tự',
            'manganh.max'           => 'Vui lòng nhập mã ngành tối đa 20 ký tự',
            'manganh.unique'        => 'Mã ngành này đã tồn tại. Vui lòng nhập mã khác',

            'tennganh.required'     => 'Vui lòng nhập tên ngành',
            'tennganh.min'          => 'Vui lòng nhập tên ngành ít nhất 3 ký tự',
            'tennganh.max'          => 'Vui lòng nhập tên ngành tối đa 500 ký tự'
        ];
    }
}
