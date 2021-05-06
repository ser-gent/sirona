<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     * @return User
     */
    public function create(array $input): User
    {
//        Validator::make($input, [
//            'firstname' => ['required', 'string', 'max:255'],
//            'lastname' => ['required', 'string', 'max:255'],
//            'working_code'=> [
//                'required',
//                'string',
//                'max:255',
//                Rule::unique(User::class),
//            ],
//            'email' => [
//                'required',
//                'string',
//                'email',
//                'max:255',
//                Rule::unique(User::class),
//            ],
//            'password' => $this->passwordRules(),
//        ])->validate();

        return User::create([
            'firstname' => $input['firstname'],
            'lastname' => $input['lastname'],
            'working_code' => $input['working_code'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
