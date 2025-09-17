<?php


require_once 'UserManager.php';

$userManager = new UserManager();
$userManager->registerUser('Eustaquio','eustaquio@gmail.com','Senhaforte1') ;
$userManager->registerUser('Mario Candido','mario@gmail.com','Senhaforte2') ;
$userManager->registerUser('Gabriel','gabriel@gmail.com','Senhaforte4') ;


echo $userManager->registerUser('Maria Oliveira', 'maria@gmail.com', 'Senha123');
echo $userManager->registerUser('Pedro', 'pedro@@gmail.com', 'Senha123');
echo $userManager->login('maria@gmail.com', 'Errada123');
echo $userManager->resetPassword('maria@gmail.com', 'Errada123');

echo $userManager->registerUser('Maria Oliveira', 'eustaquio@gmail.com', 'Senha123');
