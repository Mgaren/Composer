<?php
require_once '../vendor/autoload.php';

Use App\Wcs\Hello;

$hi = new Hello();
echo $hi->talk();