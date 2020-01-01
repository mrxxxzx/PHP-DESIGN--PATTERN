<?php 
require_once('doA.php');
require_once('doB.php');

$a = new DoA(['class'=>'A']);

$b = new DoA(['class'=>'B']);

$a->do();
$b->do();