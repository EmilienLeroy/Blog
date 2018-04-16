<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Type\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/article", name="article_")
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

    /**
     * @Route("/create", name="create")
     */
    public function createAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute('article_list');
        }
        return $this->render("article/create.html.twig",['articleForm'=>$form->createView()]);
    }
}