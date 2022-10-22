<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$show = new Hello();

echo $show->talk();
