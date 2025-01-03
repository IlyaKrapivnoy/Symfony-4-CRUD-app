<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class ArticleController extends AbstractController {
    /**
     * @Route("/", methods={"GET"})
     */
    public function index() {

        $articles = ['Art 1', 'Art 2', 'Art 3'];

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }
}
