<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTourRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Set to false if you want to implement authorization logic
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'ma_tour' => 'required|string|max:255',
            'ngay_khoi_hanh' => 'required|date',
            'thoi_gian' => 'required|string|max:255',
            'xuat_phat' => 'required|string|max:255',
            'so_cho' => 'required|integer',
            'diem_du_lich' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'destination_id' => 'required|exists:destinations,id',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_favorite' => 'sometimes|boolean'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Trường tiêu đề là bắt buộc.',
            'ma_tour.required' => 'Mã tour là bắt buộc.',
            'ngay_khoi_hanh.required' => 'Ngày khởi hành là bắt buộc.',
            'thoi_gian.required' => 'Thời gian là bắt buộc.',
            'xuat_phat.required' => 'Điểm xuất phát là bắt buộc.',
            'so_cho.required' => 'Số chỗ là bắt buộc.',
            'diem_du_lich.required' => 'Điểm du lịch là bắt buộc.',
            'price.required' => 'Giá là bắt buộc.',
            'destination_id.required' => 'Điểm đến là bắt buộc.',
            'destination_id.exists' => 'Điểm đến được chọn không tồn tại.',
            'photo.image' => 'Tệp phải là hình ảnh.',
            'photo.mimes' => 'Hình ảnh phải là một tệp thuộc các loại: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Hình ảnh không được lớn hơn 2048 kilobyte.',
            'is_favorite.boolean' => 'Trường yêu thích phải là true hoặc false.',
        ];
    }

}
