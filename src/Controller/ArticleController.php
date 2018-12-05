<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
  /**
       * @Route("/")
       */
  public function homepage()
  {
    return new Response('Maybe you should chew my fist');
  }

  /**
    * @Route("/news/why-asteroids-taste-like-bacon/{slug}")
    */
   public function show($slug)

   {
       return $this->render('article/show.html.twig',['title' => ucwords(str_replace('-', ' ', $slug)),]);
   }

   /**
     * @Route("/olds/{slug}")
     */
    public function ShowTheSlug($slug)

    {
        return new Response(sprintf('Future page to show "%s"',$slug));
    }

}
 ?>
