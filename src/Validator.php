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

    public function validateStrongPassword(string $password): bool | string{

        $hashUppercase =false;
        $hashNumeric = false;


        if (strlen($password) < 8){
            return false;
        }

        for ($i = 0;  $i < strlen($password) ; $i++){
            if ($password[$i] == strtoupper($password[$i])){
                $hashUppercase = true;
            }
            if (is_numeric($password[$i])){
                $hashNumeric = true;
            }
        }

        if (
            $hashNumeric == true && 
            $hashUppercase == true
            ){
            return true;
        } else{
            return false;
        }
        
    }

}