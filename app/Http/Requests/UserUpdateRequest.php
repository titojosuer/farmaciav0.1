<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
      $user = $this->route('user');
      return [
          'name' => 'required',
          // 
          // 'username' => ['required', 'min:3', 'unique:users,username,' . $user->id],
          'email' => [
              'required', 'unique:users,email,' . request()->route('user')->id
          ],
          'password' => 'sometimes'
      ];
  }
}
