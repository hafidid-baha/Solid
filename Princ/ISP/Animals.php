<?php
namespace SOLID\ISP;

class Animals{

    protected $name;
    protected $color;
    protected $numOfLegs;

    public function __construct(string $name,string $color,int $numLegs ){
        $this->name = $name;
        $this->color = $color;
        $this->numOfLegs = $numLegs;
    }

}