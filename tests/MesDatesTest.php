<?php

use PHPUnit\Framework\TestCase;

class MesDatesTest extends TestCase
{
    public function testdemain()
    {
        $mesDates = new \Abdou\MesDates();
        $demain = $mesDates->demain();

        $Date = date('d-m-Y', strtotime('+1 day'));
        $Resultat = json_encode(['demain' => $Date]);

        $this->assertEquals($Resultat, $demain);
        
    }
}
