<?php namespace Microventures {

    class Animal
    {

        private $name;
        private $nameHistory = [];

        private $age;
        private $shouldIncrementAge = false;

        /**
         * @return mixed
         */
        public function age()
        {
            return $this->age;
        }

        /**
         * @param mixed $age
         *
         * @return Animal
         */
        public function setAge($age)
        {
            $this->age = $age;

            return $this;
        }

        /**
         * @return mixed
         */
        public function name()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         * @return Animal
         */
        public function setName($name)
        {
            $this->name = $name;
            $this->nameHistory[] = $name;

            return $this;
        }

        /**
         * @return array
         */
        public function  nameHistory()
        {
            return $this->nameHistory;
        }

        public function __construct($name, $age)
        {
            $this->setName($name);
            $this->setAge($age);
        }

        public function getAverageNameLength()
        {
            //Prevent division by zero
            if (count($this->nameHistory()) == 0) {
                return 0;
            }

            $sum = 0;

            foreach ($this->nameHistory() as $name) {
                $sum += strlen($name);
            }

            return $sum / count($this->nameHistory());
        }

        public function speak($sound)
        {
            if ($this->shouldIncrementAge) {
                $this->setAge($this->age() + 1);
                $this->shouldIncrementAge = false;
            } else {
                $this->shouldIncrementAge = true;
            }

            return $sound;
        }
    }
}