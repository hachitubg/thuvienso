<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TheloaiCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // authentication -> xác thực
        // authorize -> phân quyền
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
            'matheloai'                 => 'required|min:3|max:20|unique:qltv_theloai', //tên table qtlv_theloai
            'tentheloai'                => 'required|min:3|max:500',
        ];
    }
    public function messages() {
        return [
            'matheloai.required'        => 'Vui lòng nhập mã thể loại',
            'matheloai.min'             => 'Vui lòng nhập mã thể loại ít nhất 3 ký tự',
            'matheloai.max'             => 'Vui lòng nhập mã thể loại tối đa 20 ký tự',
            'matheloai.unique'          => 'Mã thể loại này đã tồn tại. Vui lòng nhập mã khác',

            'tentheloai.required'       => 'Vui lòng nhập tên thể loại',
            'tentheloai.min'            => 'Vui lòng nhập tên thể loại ít nhất 3 ký tự',
            'tentheloai.max'            => 'Vui lòng nhập tên thể loại tối đa 500 ký tự'
        ];
    }
}
