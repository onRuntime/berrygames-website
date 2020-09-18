<?php

namespace App\Controller\Berryplus\Minecraft;

use App\Entity\Berrygames\Gifts;
use App\Form\GiftsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class GiftsController extends AbstractController
{

    /**
     * @Route("/berryplus/minecraft/gifts/", name="berryplus.minecraft.gifts")
     */
    public function index()
    {
        $array = array('ChocolateIG', 'Noctember');
        dump($array);

        $gifts = $this->getDoctrine()->getRepository(Gifts::class, 'berrygames')->findAll();
        return $this->render('berrygames/berryplus/minecraft/gifts/gifts.html.twig', [
            'page_title' => 'Gifts',
            'gifts' => $gifts
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/gifts/new", name="berryplus.minecraft.gifts.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $gift = new Gifts();

        $form = $this->createForm(GiftsType::class, $gift);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('berrygames');

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($gift);
            $em->flush($gift);
            $this->addFlash('success', 'Changes on ' . $gift->getCode() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.gifts') . "#" . $gift->getCode());
        }

        return $this->render('berrygames/berryplus/minecraft/gifts/gifts_new.html.twig', [
            'gift' => $gift,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/gifts/edit/{gift}", name="berryplus.minecraft.gifts.edit")
     * @param $gift
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($gift, Request $request)
    {
        $gift = $this->getDoctrine()->getRepository(Gifts::class, 'berrygames')->findOneBy(['code' => $gift]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $form = $this->createForm(GiftsType::class, $gift);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($gift);
            $em->flush($gift);
            $this->addFlash('success', 'Changes on ' . $gift->getCode() . ' have been successfully saved!');
            return $this->redirect($this->get('router')->generate('berryplus.minecraft.gifts') . "#" . $gift->getCode());
        }

        return $this->render('berrygames/berryplus/minecraft/gifts/gifts_edit.html.twig', [
            'gift' => $gift,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/minecraft/gifts/delete/{gift}", name="berryplus.minecraft.gifts.delete")
     * @param $gift
     * @return RedirectResponse
     */
    public function delete($gift)
    {
        $gift = $this->getDoctrine()->getRepository(Gifts::class, 'berrygames')->findOneBy(['code' => $gift]);
        $em = $this->getDoctrine()->getManager('berrygames');
        $em->remove($gift);
        $em->flush();
        $this->addFlash('success', 'The deletion of the gift ' . $gift->getCode() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.minecraft.gifts');
    }

}