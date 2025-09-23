<?php

class Validator{

    public function validateEmail(string $email): bool{

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        } else {
            return false;
        }
    }

    public function isUniqueEmail(string $email, array $users): bool{
        
        foreach ($users as $user){
            if ($user->email == $email){
                return false;
            } 
        }
        return true; 
    }

    public function validateStrongPassword(string $password): bool | string 
    {

        $hasUppercase =false;
        $hasNumeric = false;


        if (strlen($password) < 8){
            return false;
        }

        for ($i = 0;  $i < strlen($password) ; $i++){
            if ($password[$i] == strtoupper($password[$i])){
                $hasUppercase = true;
            }
            if (is_numeric($password[$i])){
                $hasNumeric = true;
            }
        }

        if ($hasNumeric && $hasUppercase ){
            return true;
        } else {
            return false;
        }
        
    }

}