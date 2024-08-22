<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaCreateRequest extends FormRequest
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
            'makhoa'            => 'required|min:3|max:50|unique:qltv_khoa', //tên table qtlv_khoa
            'tenkhoa'           => 'required|min:3|max:500',
        ];
    }
    public function messages() {
        return [
            'makhoa.required'   => 'Vui lòng nhập mã Khoa',
            'makhoa.min'        => 'Vui lòng nhập mã Khoa ít nhất 3 ký tự',
            'makhoa.max'        => 'Vui lòng nhập mã Khoa tối đa 50 ký tự',
            'makhoa.unique'     => 'Mã Khoa này đã tồn tại. Vui lòng nhập mã khác',
            'tenkhoa.required'  => 'Vui lòng nhập tên Khoa',
            'tenkhoa.min'       => 'Vui lòng nhập tên Khoa ít nhất 3 ký tự',
            'tenkhoa.max'       => 'Vui lòng nhập tên Khoa tối đa 500 ký tự'
        ];
    }
}
