<?php
namespace SOLID\ISP;


class Bird extends Animals implements IFly{

    // the bird class goes here
    public function doFly(){
        echo 'this bird do fly';
    }

}