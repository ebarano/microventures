<?php namespace Microventures {

    class Dog extends Animal
    {
        public function speak($sound = "bow-wow")
        {
            return parent::speak($sound);
        }
    }
}