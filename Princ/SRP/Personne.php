<?php
namespace SOLID\SRP;

class Personne{

    private $firstname;
    private $lastname;
    private $email;

    public function __construct(string $fname,string $lname,string $email){
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->email = $email;
    }

    public function createUserName():string{
        // create the username
        return $this->firstname.$this->lastname;
    }

    public function getFirstName():string
    {
        return $this->firstname;
    }

    public function getLastName():string{
        return $this->lastname;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function validateEmail():bool{
        return Validator::validateEmail($this->email);
    }
}