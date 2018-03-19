<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.03.18
 * Time: 21:28
 */
use PHPUnit\Framework\TestCase;
class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }
    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
 ];
 }
}
?>