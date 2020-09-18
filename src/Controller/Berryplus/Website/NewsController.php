<?php

namespace App\Controller\Berryplus\Website;

use App\Entity\Website\News;
use App\Form\NewsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class NewsController extends AbstractController
{

    //TODO: Add CreatedDateTime

    /**
     * @Route("/berryplus/website/news", name="berryplus.website.news")
     */
    public function index()
    {

        $news = $this->getDoctrine()->getRepository(News::class, 'website')->findAll();

        return $this->render('berrygames/berryplus/website/news/news.html.twig', [
            'page_title' => 'News',
            'news' => $news
        ]);
    }

    /**
     * @Route("/berryplus/website/news/new", name="berryplus.website.news.new")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $new = new News();

        $form = $this->createForm(NewsType::class, $new);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager('website');

        if ($form->isSubmitted() && $form->isValid()) {
            $new->setViews(0);
            $em->persist($new);
            $em->flush($new);
            $this->addFlash('success', 'Changes on ' . $new->getTitle() . ' have been successfully saved!');
            return $this->redirectToRoute('berryplus.website.news');
        }

        return $this->render('berrygames/berryplus/website/news/news_new.html.twig', [
            'new' => $new,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/website/news/edit/{id}", name="berryplus.website.news.edit")
     * @param $id
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit($id, Request $request)
    {

        $new = $this->getDoctrine()->getRepository(News::class, 'website')->findOneBy(['id' => $id]);
        $em = $this->getDoctrine()->getManager('website');
        $form = $this->createForm(NewsType::class, $new);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($new);
            $em->flush($new);
            $this->addFlash('success', 'Changes on ' . $new->getTitle() . ' have been successfully saved!');
            return $this->redirectToRoute('berryplus.website.news');
        }

        return $this->render('berrygames/berryplus/website/news/news_edit.html.twig', [
            'new' => $new,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/berryplus/website/news/delete/{id}", name="berryplus.website.news.delete")
     * @param $id
     * @return RedirectResponse
     */
    public function delete($id)
    {
        $new = $this->getDoctrine()->getRepository(News::class, 'website')->findOneBy(['id' => $id]);
        $em = $this->getDoctrine()->getManager('website');
        $em->remove($new);
        $em->flush($new);
        $this->addFlash('success', 'The deletion of the news ' . $new->getTitle() . ' was successfully completed!');
        return $this->redirectToRoute('berryplus.website.news');
    }
}