<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDestinationRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Thay đổi nếu bạn muốn sử dụng xác thực khác
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:destinations|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_favorite' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Trường tên là bắt buộc.',
            'name.unique' => $this->name . ' đã tồn tại.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
            'description.string' => 'Mô tả phải là một chuỗi ký tự.',
            'photo.image' => 'Tệp phải là hình ảnh.',
            'photo.mimes' => 'Hình ảnh phải là một tệp thuộc các loại: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Hình ảnh không được lớn hơn 2048 kilobyte.',
            'is_favorite.boolean' => 'Trường yêu thích phải là true hoặc false.',
        ];
    }
}
