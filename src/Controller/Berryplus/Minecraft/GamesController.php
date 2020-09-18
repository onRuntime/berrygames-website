<?php

namespace App\Controller\Berryplus\Minecraft;

use App\Entity\Berrygames\Games;
use App\Form\GamesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GamesController extends AbstractController
{

    /**
     * @Route("/berryplus/minecraft/games/", name="berryplus.minecraft.games")
     */
    public function index()
    {
        $games = $this->getDoctrine()->getRepository(Games::class, 'berrygames')->findAll();
        return $this->render('berrygames/berryplus/minecraft/games/games.html.twig', [
            'page_title' => 'Games',
            'games' => $games
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/games/new", name="berryplus.minecraft.games.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $game = new Games();

        $form = $this->createForm(GamesType::class, $game);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('berrygames');

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($game);
            $em->flush($game);
            $this->addFlash('success', 'Changes on ' . $game->getCodename() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.games') . "#" . $game->getCodename());
        }

        return $this->render('berrygames/berryplus/minecraft/games/games_new.html.twig', [
            'game' => $game,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/games/edit/{game}", name="berryplus.minecraft.games.edit")
     * @param $game
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($game, Request $request)
    {
        $game = $this->getDoctrine()->getRepository(Games::class, 'berrygames')->findOneBy(['codename' => $game]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $form = $this->createForm(GamesType::class, $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($game);
            $em->flush($game);
            $this->addFlash('success', 'Changes on ' . $game->getCodename() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.games') . "#" . $game->getCodename());
        }

        return $this->render('berrygames/berryplus/minecraft/games/games_edit.html.twig', [
            'game' => $game,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/games/delete/{game}", name="berryplus.minecraft.games.delete")
     * @param $game
     * @return RedirectResponse
     */
    public function delete($game)
    {
        $game = $this->getDoctrine()->getRepository(Games::class, 'berrygames')->findOneBy(['codename' => $game]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $em->remove($game);
        $em->flush();
        $this->addFlash('success', 'The deletion of the game ' . $game->getCodename() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.minecraft.games');
    }

}