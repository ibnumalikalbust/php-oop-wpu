<?php

// static keyword

class StaticExample {
	public static $number = 1;

	public static function sayHello() {
		return 'Hello ' . self::$number++;
	}
}

echo StaticExample::$number;
echo PHP_EOL;
echo StaticExample::sayHello();
echo PHP_EOL;
echo StaticExample::sayHello();
echo PHP_EOL;

class CompareStandart {
	public $number = 1;

	public function sayHello() {
		return 'Standart (Value Is Reset In New Instance) : ' . $this->number++;
	}
}

$object1 = new CompareStandart;
echo $object1->sayHello();
echo PHP_EOL;
echo $object1->sayHello();
echo PHP_EOL;
echo $object1->sayHello();
echo PHP_EOL;

$object2 = new CompareStandart;
echo $object2->sayHello();
echo PHP_EOL;
echo $object2->sayHello();
echo PHP_EOL;
echo $object2->sayHello();
echo PHP_EOL;

class CompareStatic {
	public static $number = 1;

	public function sayHello() {
		return 'Static (Value Is Not Reset In New Instance) : ' . self::$number++;
	}
}

$object3 = new CompareStatic;
echo $object3->sayHello();
echo PHP_EOL;
echo $object3->sayHello();
echo PHP_EOL;
echo $object3->sayHello();
echo PHP_EOL;

$object4 = new CompareStatic;
echo $object4->sayHello();
echo PHP_EOL;
echo $object4->sayHello();
echo PHP_EOL;
echo $object4->sayHello();
echo PHP_EOL;