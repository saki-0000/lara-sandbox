<?php

use packages\Domain\Domain\User\UserRepositoryInterface;

class UserRepository  implements UserRepositoryInterface
{

    public function save(User $user): mixed
    {
        DB::table('users')->updateOrInsert();
        return;
    }
    public function find(UserId $user): User
    {
        return new User();
    }
    public function findByPage(int $page, int $size): mixed
    {
        return;
    }
}
