<?php

require __DIR__.'/../vendor/autoload.php';

use ITC\UUID;

class UUIDTest extends PHPUnit_Framework_TestCase
{
    const UUID_PATTERN = '/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/';

    public function test_v4()
    {
        $uuid = UUID::v4();
        $this->assertNotEmpty(preg_match(self::UUID_PATTERN, $uuid));
    }
}
