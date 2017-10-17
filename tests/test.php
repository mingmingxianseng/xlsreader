<?php

namespace tests;

use mmxs\Reader\XlsReader;
use PHPUnit\Framework\TestCase;

class testReader extends TestCase
{
    public function test1()
    {
        $path   = __DIR__ . '/test.xls';
        $reader = new XlsReader($path);
        $this->assertTrue(true);
    }
}