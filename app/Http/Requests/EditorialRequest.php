<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
        class EditorialRequest extends FormRequest {
        public function rules(): array {
            return [
                'title'     => ['required', 'string', 'max:255'],
                'publish'   => ['required'],
                'cover'     => ['required','image','max:2048','dimensions:min_width=512,min_height=288,max_width=1920,max_height=1080']
            ];
        }
    }
