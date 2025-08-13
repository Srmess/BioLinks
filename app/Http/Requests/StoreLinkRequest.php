<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'url' => ['required', 'url'],
        ];
    }

    public function postLink()
    {
        $user = Auth::user();

        $payload = array_merge(
            $this->validated(),
            ['index' =>  count($user->links()->get())]
        );

        $user->links()->create($payload);

        return true;
    }
}
