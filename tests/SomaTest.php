<?php

use PHPUnit\Framework\TestCase;
include '.\src\Soma.php';

class SomaTest extends TestCase
{
    public function testSoma()
    {
        $this->assertEquals(4 , soma(2,2));
    }
}
