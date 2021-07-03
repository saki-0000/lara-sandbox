<?php

namespace Tests\Unit;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = new User($userId, 'test_name');
        $userId = new UserId('test_id');
        $this->assertSame($user->getId()->getValue(), 'test_id');
        $this->assertSame($user->getName(), 'test_name');
    }
}
