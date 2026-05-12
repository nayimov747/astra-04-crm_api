<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CompanyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class GetCompaniesByUserAction extends AbstractController
{
    public function __invoke(Request $request, CompanyRepository $companyRepository): array
    {
        $userId = $request->query->get('userId');
        return $companyRepository->findBy(['user' => $userId]);
    }
}
