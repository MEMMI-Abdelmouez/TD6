<?php
/**
 * Affiches File Doc Comment
 *
 * PHP version 8
 *
 * @category Affiches
 * @package  Affiches
 * @author   Author <abdelmouez.memmi@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
require_once "../src/MesDates.php";
$objDate = new \Abdou\MesDates();
echo $objDate->demain();
