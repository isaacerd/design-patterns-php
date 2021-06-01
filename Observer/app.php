<?php



require 'User.php';
require 'Observador.php';

$blog = new Observador();

$blog->attach(new User);
$blog->attach(new Food);
$blog->publish('Este es el nuevo post bla, bla.');


