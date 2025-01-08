<?php
namespace App\Controller;

use App\Entity\Article;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class ArticleController extends AbstractController {
    /**
     * @Route("/", methods={"GET"})
     */
    public function index() {
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }
}
