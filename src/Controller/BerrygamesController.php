<?php

namespace App\Controller;

use App\Entity\Forum\XfPost;
use App\Entity\Website\News;
use Exception;
use JBBCode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BerrygamesController extends AbstractController
{
    /**
     * @Route("/", name="redirect", host="{key}.berrygames.net", defaults={"key"="redirect"}, requirements={"key"="redirect|discord"})
     * @Route("/redirect/{key}")
     * @param null $key
     * @return Response
     */
    public function _redirect($key = null)
    {
        switch ($key) {
            case 'discord':
                $url = 'https://discord.gg/9vedhPD';
                break;
            default:
                $url = 'https://berrygames.net';
                break;
        }

        $params = array();
        $params['longUrl'] = $url;
        $results = $this->bitly_get('shorten', $params);
        return $this->render('berrygames/redirect/redirect.html.twig', [
            'final_url' => $results['data']['url'],
            'parsed_url' => parse_url($url, PHP_URL_HOST)
        ]);
    }

    public function bitly_get($endpoint, $params)
    {
        $bitly_oauth_api = 'https://api-ssl.bit.ly/v3/';
        $params['access_token'] = '6b8985663f057fd9e24a3980bb4682185e4f9bb9';
        $url = $bitly_oauth_api . $endpoint . "?" . http_build_query($params);
        return json_decode($this->bitly_get_curl($url), true);
    }

    public function bitly_get_curl($uri)
    {
        $output = "";
        try {
            $ch = curl_init($uri);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_TIMEOUT, 4);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $output = curl_exec($ch);
        } catch (Exception $e) {
        }
        return $output;
    }

    /**
     * @Route("/terms", name="tos")
     */
    public function tos()
    {
        return $this->render('berrygames/tos/tos.html.twig');
    }

    /**
     * @Route("/branding", name="branding")
     */
    public function branding()
    {
        return $this->render('berrygames/branding/branding.html.twig');
    }

    /**
     * @Route("/news", name="news")
     */
    public function news()
    {

        $news = $this->getDoctrine()->getRepository(News::class, 'website')->findBy(array(), array('id' => 'DESC'));
        $posts = $this->getDoctrine()->getRepository(XfPost::class, 'forum')->findAll();

        foreach ($news as $new) {
            $post = null;
            foreach ($posts as $item) {
                if ($new->getPostId() == $item->getPostId()) {
                    $post = $item;
                    break;
                }
            }
            $new->post = $post;
        }

        return $this->render('berrygames/news/news.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @Route("/news/{link}", name="news_show")
     * @param $link
     * @return Response
     */
    public function news_show($link)
    {
        $new = $this->getDoctrine()->getRepository(News::class, 'website')->findOneBy(['link' => $link]);
        $new->addViews(1);

        $em = $this->getDoctrine()->getManager('website');
        $em->persist($new);
        $em->flush($new);

        $new->post = $this->getDoctrine()->getRepository(XfPost::class, 'forum')->find($new->getPostId());

        $parser = new JBBCode\Parser();
        $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());

        $parser->addBBCode("CENTER", '<div style="text-align: center">{param}</div>');
        $parser->addBBCode("RIGHT", '<div style="text-align: right">{param}</div>');
        $parser->addBBCode("LEFT", '<div style="text-align: left">{param}</div>');
        $parser->addBBCode("MEDIA", '<iframe src="https://www.youtube.com/embed/{param}?wmode=opaque&amp;start=0" width="560" height="315" frameborder="0" allowfullscreen="true"></iframe>', true);
        $parser->parse(nl2br($new->post->getMessage()));
        $new->content = $parser->getAsHtml();

        return $this->render('berrygames/news/news_show.html.twig', [
            'new' => $new
        ]);
    }

    /**
     * @Route("/", name="index")
     * @Route("/home")
     */
    public function index()
    {
        $news = $this->getDoctrine()->getRepository(News::class, 'website')->findBy(array(), array('id' => 'DESC'));
        $posts = $this->getDoctrine()->getRepository(XfPost::class, 'forum')->findAll();

        foreach ($news as $new) {
            $post = null;
            foreach ($posts as $item) {
                if ($new->getPostId() == $item->getPostId()) {
                    $post = $item;
                    break;
                }
            }
            $new->post = $post;
        }
        return $this->render('berrygames/home/home.html.twig', [
            'news' => $news
        ]);
    }

    /**
     * @Route("/jobs/{job}", name="jobs")
     * @param null $job
     * @param null $id
     * @return Response
     */
    public function jobs($job = null, $id = null)
    {
        switch ($job) {
            case 'helper':
                $id = 'goQoj7';
                break;
            case 'moderator':
                $id = 'NmjFKh';
                break;
            case 'redactor':
                $id = 'Welgmk';
                break;
            case 'designer':
                $id = 'gBqFeJ';
                break;
            case 'developer':
                $id = 'uTeykr';
                break;
            case 'builder':
                $id = 'bfsJ1W';
                break;
            default:
                return $this->redirectToRoute('index');
        }

        return $this->render('berrygames/jobs/jobs_show.html.twig', [
            'job' => $job,
            'id' => $id
        ]);
    }

}
