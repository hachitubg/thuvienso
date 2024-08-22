<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NxbCreateRequest extends FormRequest
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
            'manxb'             => 'required|min:3|max:20|unique:qltv_nxb', //tên table qtlv_nxb
            'tennxb'            => 'required|min:3|max:500',
        ];
    }
    public function messages() {
        return [
            'manxb.required'    => 'Vui lòng nhập mã chuyên ngành',
            'manxb.min'         => 'Vui lòng nhập mã chuyên ngành ít nhất 3 ký tự',
            'manxb.max'         => 'Vui lòng nhập mã chuyên ngành tối đa 20 ký tự',
            'manxb.unique'      => 'Mã chuyên ngành này đã tồn tại. Vui lòng nhập mã khác',

            'tennxb.required'   => 'Vui lòng nhập tên chuyên ngành',
            'tennxb.min'        => 'Vui lòng nhập tên chuyên ngành ít nhất 3 ký tự',
            'tennxb.max'        => 'Vui lòng nhập tên chuyên ngành tối đa 500 ký tự'
        ];
    }
}
