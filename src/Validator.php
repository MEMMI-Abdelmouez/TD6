<?php

namespace TestUnitaire;
class Validator {
    

    public function Nbr_char($chaine){
        return strlen($chaine)>=2;
    }
}