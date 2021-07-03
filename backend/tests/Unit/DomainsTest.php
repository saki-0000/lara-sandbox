<?php

namespace Tests\Unit;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use Tests\TestCase;

class DomainsTest extends TestCase
{
    /**
     * @return void
     */
    public function test_ユーザードメインとユーザーIDドメインの動作確認()
    {
        $userId = new UserId('test_id');
        $user = new User($userId, 'test_name');
        $this->assertSame($user->getId()->getValue(), 'test_id');
        $this->assertSame($user->getName(), 'test_name');
    }
}
