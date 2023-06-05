<?php

namespace tools\tests;

use PHPUnit\Framework\TestCase;

class DataCompareTest extends TestCase
{
    public function testReadDataFromFile()
    {
        $dataCompare = new DataCompare();
        $this->assertTrue($dataCompare->readDataFromFile('data1.csv'));
        $this->assertTrue($dataCompare->readDataFromFile('data2.csv'));
        $this->assertFalse($dataCompare->readDataFromFile('data3.php'));
    }

    public function testWriteToDatabase()
    {
        $dataCompare = new DataCompare();
    }
}
?>