<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocgiaCreateRequest extends FormRequest
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
            'madocgia'                => 'required|min:3|max:50|unique:qltv_docgia', //tên table qtlv_sach
            'tendocgia'               => 'required|min:3|max:200',
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
            'madocgia.required'       => 'Vui lòng nhập mã đọc giả',
            'madocgia.min'            => 'Vui lòng nhập mã đọc giả ít nhất 3 ký tự',
            'madocgia.max'            => 'Vui lòng nhập mã đọc giả tối đa 50 ký tự',
            'madocgia.unique'         => 'Mã đọc giả này đã tồn tại. Vui lòng nhập mã khác',

            'tendocgia.required'      => 'Vui lòng nhập tên đọc giả',
            'tendocgia.min'           => 'Vui lòng nhập tên đọc giả ít nhất 3 ký tự',
            'tendocgia.max'           => 'Vui lòng nhập tên đọc giả tối đa 200 ký tự',

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

            'anh.required'          => 'Vui lòng chọn ảnh cho đọc giả',

            'khoa_id.required'   => 'Vui lòng chọn khoa',

            'nganh_id.required'       => 'Vui lòng chọn ngành'
        ];
    }
}
