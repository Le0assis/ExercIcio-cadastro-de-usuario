<?php

require_once 'User.php';
require_once 'Validator.php';
class UserManager{

    public Validator $validator;
    public $users = []; 

    public function __construct(){
        $this->validator = New Validator();
        $this->users = [ ];

    }

    public function registerUser($name, $email, $password){

        if (!$this->validator->validateEmail($email)){
            return "<p> Email invalido </p>";

        } 
        if (!$this->validator->isUniqueEmail($email, $this->users)) {
            return "<p> Email duplicado </p>";
        }

        if (!$this->validator->validateStrongPassword($password)){
            return "<p> Senha invalida </p>";
        }

        $id = count($this->users) + 1 ;
        $hash = password_hash($password, PASSWORD_DEFAULT);


        $newUser = new User ($id, $name, $email, $hash);

        $this->users[] = $newUser;

        return '<p> usuário cadastrado com sucesso. </p>';
    }

    public function login(string $email, string $password){

        $user = $this->GetUserByEmail($email);

        if ($user->email == $email){

            if (Password_verify($password, $user->password)) {
                echo "<p> Login Bem sucedido </p>";
                return true;
                
            } 

            echo "<p> Senha errada </p>";
            return false;               
        } 
        
        echo "<p> Login errado </p>";
        return false;
    }

    public function resetPassword (string $email, string $newPassword){

        $user = $this->GetUserByEmail($email);

        if ($user != null) {
            if ($this->validator->validateStrongPassword($newPassword)) {
                $user->password = password_hash($newPassword, PASSWORD_DEFAULT);
                echo "<p> senha alterada com sucesso </p>";
                return true;
            }
            echo "<p> Senha invalida </p>";
            return false;
        }

        echo "<p> Email invalido </p>";
        return false;
    }

    public function GetUserByEmail (string $email) 
    {
        foreach ($this->users as $user)
        {
            if ($user->email == $email){
                return $user;
            }
        }
    }

     
}
