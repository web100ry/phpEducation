<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.03.18
 * Time: 21:31
 */
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
abstract class MyApp_Tests_DatabaseTestCase extends TestCase
{
    use TestCaseTrait;
    // only instantiate pdo once Extensions_Database_DB_IDatabaseConnection once per test
    private $conn = null;
    final public function getConnection()
    {for test clean-up/fixture load
    static private $pdo = null;
    // only instantiate PHPUnit_
        if ($this->conn === null) {
            if (self::$pdo == null) {
                self::$pdo = new PDO('sqlite::memory:');
            }
 $this->conn = $this->createDefaultDBConnection(self::$pdo, ':memory:');
 }
        return $this->conn;
    }
}