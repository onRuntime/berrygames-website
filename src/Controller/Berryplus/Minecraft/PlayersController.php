<?php

namespace App\Controller\Berryplus\Minecraft;

use App\Entity\Berrygames\Players;
use App\Entity\Transcoder;
use App\Form\PlayersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PlayersController extends AbstractController
{

    /**
     * @Route("/berryplus/minecraft/players/", name="berryplus.minecraft.players")
     */
    public function index()
    {
        $players = $this->getDoctrine()->getRepository(Players::class, 'berrygames')->findAll();

        return $this->render('berrygames/berryplus/minecraft/players/players.html.twig', [
            'page_title' => 'Players',
            'players' => $players
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/players/edit/{player}", name="berryplus.minecraft.players.edit")
     * @param $player
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($player, Request $request)
    {
        $transcoder = new Transcoder();
        dump($transcoder->encode($player));
        $player = $this->getDoctrine()->getRepository(Players::class, 'berrygames')->findOneBy(['uuid' => $transcoder->encode($player)]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $form = $this->createForm(PlayersType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($player);
            $em->flush($player);
            $this->addFlash('success', 'Changes on ' . $player->getUuid() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.players') . "#" . $player->getUuid());
        }

        return $this->render('berrygames/berryplus/minecraft/players/players_edit.html.twig', [
            'player' => $player,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/players/delete/{player}", name="berryplus.minecraft.players.delete")
     * @param $player
     * @return RedirectResponse
     */
    public function delete($player)
    {
        $transcoder = new Transcoder();
        $player = $this->getDoctrine()->getRepository(Players::class, 'berrygames')->findOneBy(['uuid' => $transcoder->encode($player)]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $em->remove($player);
        $em->flush();
        $this->addFlash('success', 'The deletion of the player ' . $player->getUuid() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.minecraft.players');
    }

}