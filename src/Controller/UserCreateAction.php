<?php

declare(strict_types=1);

namespace App\Controller;

use ApiPlatform\Validator\ValidatorInterface;
use App\Component\User\UserFactory;
use App\Component\User\UserManager;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserCreateAction extends AbstractController
{
    public function __construct(
        private readonly UserFactory $userFactory,
        private readonly UserManager $userManager,
        private readonly ValidatorInterface $validator
    ) {
    }

    public function __invoke(User $user): User
    {
        $this->validator->validate($user);

        $user = $this->userFactory->create(
            $user->getFullName(),
            $user->getEmail(),
            $user->getPassword()
        );

        $this->userManager->save($user, true);

        return $user;
    }
}
