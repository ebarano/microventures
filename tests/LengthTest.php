<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10/5/15
 * Time: 7:01 AM
 */

namespace Microventures\Tests;

use Microventures\Animal;

class LengthTest extends \PHPUnit_Framework_TestCase {
    //17
    /**
     *
     */
    public function testAverageLength()
    {
        //Create an Object with a random name to test with.
        $fakeName = substr('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ,mt_rand( 0 ,25 ) ,1 ) .substr( md5( time() ), 1);

        //We're creating an Animal object because the tested functionality is inherited by 'Dog' and 'Cat'
        $animal = new Animal('Named',1);

        //Our average length should be 5
        $this->assertEquals(5, $animal->getAverageNameLength());

        //Get name with 7 characters
        $animal->setName('My Name');

        //Our average length should be 6
        $this->assertEquals(6, $animal->getAverageNameLength());

        //Get name with 9 characters
        $animal->setName('Long Name');

        //Our average length should be 15
        $this->assertEquals(7, $animal->getAverageNameLength());
    }
}
