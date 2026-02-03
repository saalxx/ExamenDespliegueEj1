<?php

use PHPUnit\Framework\TestCase;
use App\DNI;
class DNITest extends TestCase
{
    public function getDNIConletra()
    {
        $calc = new DNI(12345678);
        $this->assertNotNull($calc->getDNIConLetra());
    }
}
