<?php

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;

interface UserRepositoryInterface
{
    public function save(User $user): mixed;
    public function find(UserId $user): User;
    public function findByPage(int $page, int $size): mixed;
}
