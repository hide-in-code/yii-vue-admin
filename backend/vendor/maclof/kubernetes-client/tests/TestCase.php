<?php

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
	/**
	 * The api version.
	 *
	 * @var string
	 */
	protected $apiVersion = 'v1';

	/**
	 * The namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'default';

	/**
	 * Get the contents of a fixture.
	 *
	 * @param  string $path
	 * @return string|null
	 */
	protected function getFixture($path)
	{
		$path = __DIR__ . '/fixtures/' . $path;

		if (!file_exists($path)) {
			return;
		}

		$contents = file_get_contents($path);

		// Fix for windows encoded fixtures.
		$contents = str_replace("\r\n", "\n", $contents);

		return $contents;
	}
}
