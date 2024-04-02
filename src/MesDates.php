<?php

/**
 * MesDates File Doc Comment
 *
 * PHP version 8
 *
 * @category MesDates
 * @package  MesDates
 * @author   Author <abdelmouez.memmi@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

namespace Abdou;

/**
 * MesDates Class Doc Comment
 *
 * Class MesDates
 *
 * @category MesDates
 * @package  MesDates
 * @author   Author <abdelmouez.memmi@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 * @return   void
 */

class MesDates
{


    /**
     * Encoder la date
     *
     * @return bool
     */
    public function demain()
    {
        $demain = new \DateTime();
        $demain->add(new \DateInterval("P1D"));
        $reponse = ['demain' => $demain->format("d-m-Y")];
        return json_encode($reponse);

    }//end demain()


}//end class
