<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Thay đổi nếu bạn muốn sử dụng xác thực khác
    }

    public function rules()
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'content' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Trường tiêu đề là bắt buộc.',
            'title.unique' => $this->title . ' đã tồn tại.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',
            'content.required' => 'Trường nội dung là bắt buộc.',
            'content.string' => 'Nội dung phải là một chuỗi ký tự.',
            'photo.image' => 'Tệp phải là hình ảnh.',
            'photo.mimes' => 'Hình ảnh phải là một tệp thuộc các loại: jpeg, png, jpg, gif, svg.',
            'photo.max' => 'Hình ảnh không được lớn hơn 2048 kilobyte.',
        ];
    }
}
