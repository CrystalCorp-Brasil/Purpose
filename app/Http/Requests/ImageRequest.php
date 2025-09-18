<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
        class ImageRequest extends FormRequest {
        public function rules(): array {
            return [
                'title' => ['required', 'string', 'max:255'],
                'descr' => ['nullable','string','max:255'],
                'image' => ['required','image','max:2048','dimensions:min_width=512,min_height=288,max_width=1920,max_height=1080'],
            ];
        }
    }
