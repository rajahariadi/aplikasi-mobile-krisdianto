<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'fullname' => ['required', 'string', 'max:255'],
            'nomor' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'alamat' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ])->validate();

        return User::create([
            'fullname' => $input['fullname'],
            'nomor' => $input['nomor'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'alamat' => $input['alamat'],
            'role' => $input['role'],
        ]);
    }
}
