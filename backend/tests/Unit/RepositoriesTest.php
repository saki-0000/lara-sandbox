<?php

namespace Tests\Unit;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Infrastructure\User\UserRepository\UserRepository;
use Tests\TestCase;

class RepositoriesTest extends TestCase
{
    /**
     * @return void
     */
    public function test_ユーザーレポジトリーの動作確認()
    {
        // TODO:正しい定義のDBがないとそもそも動かない！
        // $userId = new UserId('test_id');
        // $user = new User($userId, 'test_name');

        // $repository = new UserRepository();
        // $repository->save($user);
        // $responseUser = $repository->find($userId);

        // $this->assertSame($responseUser->getId()->getValue(), 'test_id');
        // $this->assertSame($responseUser->getName(), 'test_name');
    }
}
