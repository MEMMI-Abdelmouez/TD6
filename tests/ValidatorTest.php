<?php
class ValidatorTest extends PHPUnit\Framework\TestCase{
    public function test_Nbr_char(){
        $instance = new \TestUnitaire\Validator();
        $resultat = $instance->Nbr_char("a");
        $this->assertFalse($resultat);
    }
}