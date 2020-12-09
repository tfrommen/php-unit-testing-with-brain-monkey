<?php

namespace UnitTestingWorkshop;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

abstract class TestCase extends \PHPUnit\Framework\TestCase {

	// Adds Mockery expectations to the PHPUnit assertions count.
	use MockeryPHPUnitIntegration;

	protected function setUp() {

		parent::setUp();
		Monkey\setUp();

		// Require the files to be tested
		require_once dirname( dirname( __DIR__ ) ) . '/unit-testing-workshop.php';
	}

	protected function tearDown() {

		Monkey\tearDown();
		parent::tearDown();
	}
}
