<?php namespace Microventures {

    class Cat extends Animal
    {
        public function speak($sound = "meow")
        {
            return parent::speak($sound);
        }
    }
}