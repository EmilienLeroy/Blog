<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/article")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/", name="list")
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Article::Class);
        $article = $repository->findAll();
        return $this->render('article/list.html.twig',['articles' => $article]);
    }
}