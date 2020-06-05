<?php

/**
 * this file is created by hafid id-baha
 */

namespace SOLID;

use SOLID\SRP\Personne;
use SOLID\SRP\Validator;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

/// single reponsibility principle section start
var_dump("Welcome To The Solid Principle Course");
$personne = new Personne("hafid","id-baha","hafidoftdev@gmail.com");
echo $personne->createUserName();
var_dump($personne->validateEmail());
/// single reponsibility principle section ends


