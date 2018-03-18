<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.03.18
 * Time: 19:27
 */
use PHPUnit\Framework\TestCase;
class StackTest extends TestCase{
    public function testEmpty () {
        $arr = array();
        $this->assertTrue(empty($arr));
    }
    public function testPush() {
        $arr = array();
        array_push($arr,'foo');
        $this->assertEquals('foo', $arr[count($arr)-1]);
        $this->assertFalse(empty($arr));
    }
    public function testPop($arr_pop){
        $arr = array();
       $this->assertEquals('foo', $arr_pop[count($arr)-1]);
        $this->assertTrue(empty($arr));
    }
}