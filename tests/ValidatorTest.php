<?php
use PHPUnit\Framework\TestCase;
class ValidatorTest extends TestCase{
    public function test_Nbr_char(){
        $instance = new \TestUnitaire\Validator();
        self::assertFalse($instance->Nbr_char("a"));
    }
}