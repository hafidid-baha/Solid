<?php
namespace SOLID\OCP;

class Employee{

    protected $fullName;
    protected $email;
    protected $tel;
    protected $salary;

    public function __construct(string $name,string $email,string $tel,float $salary){
        $this->fullName = $name;
        $this->email = $email;
        $this->tel = $tel;
        $this->salary = $salary;
    }

    public function getEmplyeeBounus():float{
        return $this->salary*0.1;
    }

}