<?php

namespace Phpunit\Practis\Tests;

use PHPUnit\Framework\TestCase;

use function Phpunit\Practis\stringLenght;

class PractiseTest extends TestCase
{
    public function testConted()
    {
        
        $expected = stringLenght('test');
        $this->assertSame(4, $expected, 'campare int 4');
    }
}
