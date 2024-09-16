<?php

// constant

$info = 'define() can not user in class, const can use in class';
echo $info . PHP_EOL;

define('NAME', 'Habibullah');
echo NAME . PHP_EOL;

const AGE = 24;
echo AGE . PHP_EOL;

echo 'Magic Constant Line : ' . __LINE__ . PHP_EOL;
echo 'Magic Constant File : ' . __FILE__ . PHP_EOL;
echo 'Magic Constant Dir : ' . __DIR__ . PHP_EOL;
echo 'Magic Constant Function : ' . __FUNCTION__ . PHP_EOL;
echo 'Magic Constant Class : ' . __CLASS__ . PHP_EOL;
echo 'Magic Constant Trait : ' . __TRAIT__ . PHP_EOL;
echo 'Magic Constant Method : ' . __METHOD__ . PHP_EOL;
echo 'Magic Constant Namespace : ' . __NAMESPACE__ . PHP_EOL;

class Test {
	const GENDER = 'Male';

	public static function test() {
		echo 'Magic Constant Class : ' . __CLASS__ . PHP_EOL;
		echo 'Magic Constant Function : ' . __FUNCTION__ . PHP_EOL;
		return true;
	}
}
echo Test::GENDER . PHP_EOL;
Test::test();
