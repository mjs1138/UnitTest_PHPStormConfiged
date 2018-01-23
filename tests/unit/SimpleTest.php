<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 1/18/18
 * Time: 11:17 AM
 */

use \PHPUnit\Framework\TestCase;


class SimpleTest extends TestCase {
    public function testTrueAssertsToTrue(){
        $a=1;
        $this->assertTrue(true);
    }
}