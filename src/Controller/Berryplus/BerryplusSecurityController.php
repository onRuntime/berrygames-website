<?php

namespace App\Controller\Berryplus;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class BerryplusSecurityController extends AbstractController
{

    /**
     * @Route("/berryplus/login", name="berryplus.login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('berrygames/berryplus/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

}