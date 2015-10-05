<?php
/**
 * Created by PhpStorm.
 * User: mbensch
 * Date: 9/30/15
 * Time: 8:41 PM
 */

namespace Microventures\Tests;

use Microventures\Animal;

class AnimalTest extends \PHPUnit_Framework_TestCase {
	//17
    /**
     *
     */
    public function testIncrementAge()
	{
		//Create an Object to test with.
		//We're creating an Animal object because the tested functionality is inherited by 'Dog' and 'Cat'
		$animal = new Animal('Animal',1);

		//Speak once
		$animal->speak("test");

		//Our age should still be 1
        $this->assertEquals(1, $animal->age());

        //Speak twice
        $animal->speak("test");

        //Now our age should be 2
		$this->assertEquals(2, $animal->age());
	}
}
