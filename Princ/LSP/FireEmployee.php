<?php
namespace SOLID\LSP;

use SOLID\OCP\Employee;

class FireEmployee{

    private $employee;

    public function __construct(Employee $employee){
        $this->employee = $employee;
    }

    public function fireEmployee(){
        echo 'the employee named '. $this->employee->getName().' is fired<br />';
    }

}