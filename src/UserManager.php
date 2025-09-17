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

    # Cadastro
    public function registerUser($name, $email, $password){
        # email

        if (!$this->validator->validateEmail($email)){
            return "<p> Email invalido </p>";

        } elseif (!$this->validator->isUniqueEmail($email, $this->users)) {
            return "<p> Email duplicado </p>";
        }

        #password
        if (!$this->validator->validateStrongPassword($password)){
            return "<p> Senha invalida </p>";
        }

        $id = count($this->users) + 1 ;
        $hash = password_hash($password, PASSWORD_DEFAULT);


        $newUser = New User ($id, $name, $email, $hash);

        $this->users[] = $newUser;

        return '<p> Usuario cadastrado </p>';




    }

    public function getpassword (int $id){
        return $this->users[$id]->password;
    }
    # Login
    # Reset
}

$userManager = new UserManager();
$userManager->registerUser('Eustaquio','eustaquio@gmail.com','Senhaforte1') ;
$userManager->registerUser('Mario Candido','mario@gmail.com','Senhaforte2') ;
$userManager->registerUser('Gabriel','gabriel@gmail.com','Senhaforte4') ;
$result = $userManager->registerUser('Maria Alice','Maria@gmail.com','Senhaforte4') ;

echo $result ;
echo $userManager->getpassword(2) ;