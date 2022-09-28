<?php

namespace MyBuilder\Library\WhenIWork\Repository;

use MyBuilder\Library\WhenIWork\Model\User;

class UserRepository extends WhenIWorkRepository
{
    /**
     * @param $id
     *
     * @return User
     */
    public function findById($id)
    {
        $user =  $this->whenIWorkApi->usersGetExistingUser($id);

        return $this->deserializeModel($user, User::class);
    }

    /**
     * @return User[]
     */
    public function findAll()
    {
        $usersRaw  = $this->whenIWorkApi->usersListingUsers();

        return $this->deserializeModel($usersRaw, 'ArrayCollection<'. User::class .'>');
    }
}
