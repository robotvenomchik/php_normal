<?php

namespace src\models;

class Users
{
    public function findAll():array
    {
        return [
            0 => [
                'first_name' => 'test',
                'second_name' => 'test',
                'login' => 'test',
                'email' => 'test@test.com',
            ],
            1 => [
                'first_name' => 'test',
                'second_name' => 'test',
                'login' => 'test',
                'email' => 'test@test.com',
            ],
            2 => [
                'first_name' => 'test',
                'second_name' => 'test',
                'login' => 'test',
                'email' => 'test@test.com',
            ],

        ];
    }
}