<?php

/**
 * this file is created by hafid id-baha
 */

namespace SOLID;

use SOLID\SRP\Personne;
use SOLID\SRP\Validator;

use SOLID\OCP\Employee;
use SOLID\OCP\PermanentEmp;

use SOLID\ISP\Bird;
use SOLID\ISP\Reptile;

use SOLID\LSP\FireEmployee;

require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

/// single reponsibility principle section start
echo '---------- single responsibility principle<br />';
$personne = new Personne("hafid","id-baha","hafidoftdev@gmail.com");
echo $personne->createUserName();
var_dump($personne->validateEmail());
/// single reponsibility principle section ends

// open closed principle section starts
echo '----------- open closed principle<br />';
$employee = new Employee("hafid id-baha","hafid@gmail.com","0332355666565",1252.20);
echo 'emp bonus '.$employee->getEmplyeeBounus();

$permEmp = new PermanentEmp("ahmed ali","ali@gmail.com","6564685465",12455.2);
echo  '<br /> pem employee salary '.$permEmp->getEmplyeeBounus().'<br />';

// open closed principle section ends


// Likov Substitution principle section starts
echo '----------- Likov Substitution principle<br />';

echo 'lets fire the normal employee<br />';
$fireRegulare = new FireEmployee($employee);
$fireRegulare->fireEmployee();

echo 'lets fire the normal perm employee<br />';

$firePer = new FireEmployee($permEmp);
$firePer->fireEmployee();

// Likov Substitution principle section ends

// inteface sagregation principle section starts

echo '---------- inteface sagregation principle <br />';

$bird = new Bird("birdname","white",3);
$bird->doFly();
echo '<br />';
$reptile = new Reptile("ripName","red",5);
$reptile->doCrawl();

// inteface sagregation principle section ends




