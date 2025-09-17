<?php

class User {
    public int $id;
    public string $name;
    public string $email;
    public string $password;

    public function __construct($id, $email, $name, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}