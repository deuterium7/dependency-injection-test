<?php

namespace AlexanderZabornyi\DependencyInjectionTest\Tests;

use AlexanderZabornyi\DependencyInjectionTest\DatabaseConfiguration;
use AlexanderZabornyi\DependencyInjectionTest\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('alex', '1234', 'localhost', 3306);
        $connection = new DatabaseConnection($config);

        $this->assertEquals('alex:1234@localhost:3306', $connection->getDsn());
    }
}