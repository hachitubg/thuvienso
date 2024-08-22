<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThuthuCreateRequest extends FormRequest
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
            'mathuthu'                => 'required|min:3|max:50|unique:qltv_thuthu', //tên table qtlv_thuthu
            'tenthuthu'               => 'required|min:3|max:200',
            'chucvu'                  => 'required|min:6|max:200',
            'gioitinh'                => 'required|min:2|max:200',
            'namsinh'                 => 'required|min:4|max:200',
            'diachi'                  => 'required|min:6|max:500',
            'sdt'                     => 'required|min:9|max:25',
            'email'                   => 'required|min:6|max:200',
            'quequan'                 => 'required|min:6|max:200',
            'anh'                     => 'required',
            'khoa_id'                 => 'required',
            'nganh_id'                => 'required',
        ];
    }
    public function messages() {
        return [
            'mathuthu.required'       => 'Vui lòng nhập mã thủ thư',
            'mathuthu.min'            => 'Vui lòng nhập mã thủ thư ít nhất 3 ký tự',
            'mathuthu.max'            => 'Vui lòng nhập mã thủ thư tối đa 50 ký tự',
            'mathuthu.unique'         => 'Mã thủ thư này đã tồn tại. Vui lòng nhập mã khác',

            'tenthuthu.required'      => 'Vui lòng nhập tên thủ thư',
            'tenthuthu.min'           => 'Vui lòng nhập tên thủ thư ít nhất 3 ký tự',
            'tenthuthu.max'           => 'Vui lòng nhập tên thủ thư tối đa 200 ký tự',

            'chucvu.required'    => 'Vui lòng nhập chức vụ',
            'chucvu.min'         => 'Vui lòng nhập chức vụ ít nhất 6 ký tự',
            'chucvu.max'         => 'Vui lòng nhập chức vụ tối đa 200 ký tự',

            'gioitinh.required'    => 'Vui lòng nhập giới tính',
            'gioitinh.min'         => 'Vui lòng nhập giới tính ít nhất 2 ký tự',
            'gioitinh.max'         => 'Vui lòng nhập giới tính tối đa 200 ký tự',

            'namsinh.required'    => 'Vui lòng nhập năm sinh',
            'namsinh.min'         => 'Vui lòng nhập năm sinh ít nhất 4 ký tự',
            'namsinh.max'         => 'Vui lòng nhập năm sinh tối đa 200 ký tự',

            'diachi.required'    => 'Vui lòng nhập địa chỉ',
            'diachi.min'         => 'Vui lòng nhập địa chỉ ít nhất 6 ký tự',
            'diachi.max'         => 'Vui lòng nhập địa chỉ tối đa 500 ký tự',

            'sdt.required'    => 'Vui lòng nhập số điện thoại',
            'sdt.min'         => 'Vui lòng nhập số điện thoại ít nhất 9 ký tự',
            'sdt.max'         => 'Vui lòng nhập số điện thoại tối đa 25 ký tự',

            'email.required'    => 'Vui lòng nhập email',
            'email.min'         => 'Vui lòng nhập email ít nhất 6 ký tự',
            'email.max'         => 'Vui lòng nhập email tối đa 200 ký tự',

            'quequan.required'    => 'Vui lòng nhập địa chỉ quê quán',
            'quequan.min'         => 'Vui lòng nhập địa chỉ quê quán ít nhất 6 ký tự',
            'quequan.max'         => 'Vui lòng nhập địa chỉ quê quán tối đa 200 ký tự',

            'anh.required'          => 'Vui lòng chọn ảnh cho thủ thư',

            'khoa_id.required'   => 'Vui lòng chọn khoa',

            'nganh_id.required'       => 'Vui lòng chọn ngành'
        ];
    }
}
