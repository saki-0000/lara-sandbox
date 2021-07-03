<?php

namespace packages\Domain\Domain\User;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;

interface UserRepositoryInterface
{
    public function save(User $user): mixed;
    public function find(UserId $id): User;
    public function findByPage(int $page, int $size): mixed;
}
