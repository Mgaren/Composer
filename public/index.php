<?php
require_once '../vendor/autoload.php';

Use App\Wcs\Hello;

$hi = new Hello();
echo $hi->talk();

echo '<br>';

Use HelloWorld\SayHello;
$hiB = new SayHello();
echo $hiB->world();