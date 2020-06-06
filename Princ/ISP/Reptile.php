<?php
namespace SOLID\ISP;

class Reptile extends Animals implements ICrawl{

    public function doCrawl(){
        echo 'this animal is crawling<br />';
    }

}