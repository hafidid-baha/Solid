<?php
namespace SOLID\OCP;

class PermanentEmp extends Employee{


    public function getEmplyeeBounus():float{
        return $this->salary*0.5;
    }

}