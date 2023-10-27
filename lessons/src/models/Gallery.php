<?php

namespace src\models;

class Gallery
{
    public function findAll():array
    {
        return [
            0 => [
                'first_name' => 'test1',
                'second_name' => 'test2',
                'login' => 'test3',
                'email' => 'test@test.com',
            ],
            1 => [
                'first_name' => 'test1',
                'second_name' => 'test2',
                'login' => 'test3',
                'email' => 'test4@test.com',
            ],
            2 => [
                'first_name' => 'test1',
                'second_name' => 'test2',
                'login' => 'test3',
                'email' => 'test2@test.com',
            ],

        ];
    }
}