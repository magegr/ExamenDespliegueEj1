<?php 
use PHPUnit\Framework\TestCase;
use App\IMC;

class IMCTest extends TestCase{

    public function testgetIMC(){
        $IMC = new IMC(81 , 1.80);
        $this->assertEquals(25 , $IMC->calcular());
    }

}