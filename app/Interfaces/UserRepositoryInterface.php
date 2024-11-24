<?php

namespace App\Interfaces;

interface UserRepositoryInterface{
    public function register($name, $email, $password);
    public function login($email, $password);
}
