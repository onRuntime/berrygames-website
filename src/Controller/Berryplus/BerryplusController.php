<?php

namespace App\Controller\Berryplus;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class BerryplusController extends AbstractController
{
    /**
     * @Route("/berryplus", name="berryplus")
     * @return Response
     * @throws TransportExceptionInterface
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     */
    public function index()
    {

        $client = HttpClient::create();
        $response = $client->request('GET', 'http://185.157.246.135/forum/api/me/', [
            'headers' => [
                'XF-Api-Key' => 'Lp_YwElW1azRwOWCU5yQTWcOU4yKBosX',
            ],
        ]);
        $content = $response->toArray();
        dump($content);

        return $this->render('berrygames/berryplus/dashboard.html.twig');
    }
}