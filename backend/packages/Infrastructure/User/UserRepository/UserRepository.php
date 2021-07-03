<?php

use Illuminate\Support\Facades\DB;
use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Domain\Domain\User\UserRepositoryInterface;

class UserRepository  implements UserRepositoryInterface
{

    public function save(User $user): mixed
    {
        DB::table('users')->updateOrInsert(
            ['id' => $user->getId()],
            ['name' => $user->getName()],
        );
    }
    public function find(UserId $id): User
    {
        $user = DB::table('users')->where('id', $id->getValue())->first();
        return new User($id, $user->name);
    }

    public function findByPage($page,  $size)
    {
        // TODO
    }
}
