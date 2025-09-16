<?php

require_once __DIR__ . '/User.php';

$teste1 = new User();

$resuktado = $teste1->validateEmail(1);

echo "$resultado";