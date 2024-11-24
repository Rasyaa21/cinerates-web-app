<?php

namespace App\Repositories;

use App\Interfaces\UserRepository as InterfacesUserRepository;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRepository implements UserRepositoryInterface{
    public function register($name, $email, $password)
    {
        $checkEmail = User::where('email', $email)->get();
        if($checkEmail->isNotEmpty()){
            return ['error' => 'email already exist'];
        }
        $hashedPassword = Hash::make($password);
        //implements breeze thing
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $$hashedPassword
        ]);
    }

    public function login($email, $password)
    {
        $findUser = User::where('email', $email)->get();

        if(!$findUser){
            return ['error' => 'user not found'];
        }

        if(!Hash::check($password, $findUser->password)){
            return ['error' => 'invalid credentials'];
        }
        //implements breeze thing
        return ['success' => 'login success'];
    }
}
