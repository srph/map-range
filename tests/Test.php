<?php

class Test extends PHPUnit_Framework_TestCase {
	public function testFunctionShouldBeCalled() {
		$called = false;
		$fn = function() use (&$called) { $called = true; };
		SRPH\MapRange\map_range($fn, 0, 1);
		$this->assertTrue($called);
	}

	public function testFunctionShouldBeCalledNTimes() {
		$expected = 5;
		$calls = 0;
		SRPH\MapRange\map_range(function() use (&$calls) { $calls++; }, 1, $expected);
		$this->assertEquals($calls, $expected);
	}

	public function testFunctionShouldNeverBeCalled() {
		$expected = 0;
		$calls = 0;
		SRPH\MapRange\map_range(function() use ($calls) { $calls++; }, $expected, $expected);
		$this->assertEquals($calls, $expected);	
	}

	public function testFunctionShouldPassIndexAsFirstArgument() {
		$stack = [];

		SRPH\MapRange\map_range(function($i) use(&$stack) {
			$stack[$i] = $i;
		}, 1, 5);

		$this->assertEquals($stack, ['1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5]);	
	}
}