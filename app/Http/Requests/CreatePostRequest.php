<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => ['required', 'max:50'],
            'description' => 'required',
            'file' => ['required', 'max:1000', 'mimes:jpeg,png,jpg']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'لطفا عنوان مطلب را وارد کنید',
            'description.required' => 'لطفا توضیحات را وارد کنید',
            'file.required' => 'لطفا تصویر اصلی این مطلب را مشخص کنید .',
            'file.max' => 'حجم تصویر انتخابی بیشتر از حد مجاز است .',
            'file.mimes' => 'فرمت تصویر انتخابی باید jpg ویا png باشد .'
        ];
    }
}
