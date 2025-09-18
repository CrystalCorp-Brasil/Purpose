<?php
    namespace App\Http\Requests;

    use App\Models\Resource;
    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Validation\Rule;

    class IconRequest extends FormRequest {
        public function rules(): array {
            return [
                'title' => ['required','string','max:255'],
                'class' => ['required','string','max:255'],
            ];
        }
    }
