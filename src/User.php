<?php

class User {

    public array $users = [];


    public function __construct (){
        $this->users = [
            ['id' => 1, 'name' => 'Stephen King', 'email' => 'stephen@gmail.com', 'password' => 'SenhaForte2'],
            ['id' => 2, 'name' => 'Ransom Riggs', 'email' => 'riggs@gmail.com', 'password' => 'SenhaForte3']
        ];

    }

    public function validateEmail(int $id){

        foreach ($this->users as $user){
            if ($user['id'] == $id){
                if (filter_var($user['wmail'], FILTER_VALIDATE_EMAIL)){
                    return true;
                } else {
                    return false;
                }

            }

        }
    }
    public function validateDuplicateEmail(int $id){
        foreach ($this->users as $user){
            if ($user['id'] == $id){
                string $userEmail == 
    }

    public function validatePassword(int $id){

    

}