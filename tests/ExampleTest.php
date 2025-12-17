<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicMathWorks(): void
    {
        $this->assertEquals(4, 2 + 2);
    }
}
