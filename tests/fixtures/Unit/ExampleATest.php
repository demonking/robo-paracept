<?php

namespace Tests\Codeception\Task\fixtures\Unit;


use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group as PhpunitGroup;
use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;

class ExampleATest extends TestCase
{
    #[Group('foo')]
    #[Group('bar')]
    #[PhpunitGroup('example')]
    #[Depends('testB')]
    public function testA(): void
    {
        $this->assertTrue(false);
    }

    #[Group('foo')]
    #[Group('bar')]
    #[Group('no')]
    #[PhpunitGroup('example')]
    public function testB(): void
    {
        $this->assertTrue(false);
    }
}
