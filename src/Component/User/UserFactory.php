<?php

declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

readonly class UserFactory
{
    public  function __construct(private UserPasswordHasherInterface $passwordHasher)
    {

    }
    public function create(
        string $fullName,
        string $email,
        string $password,
    ): User
    {
        $user = new User();

        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);

        $user->setFullName($fullName);
        $user->setEmail($email);
        $user->setPassword($hashedPassword);

        return $user;
    }
}
