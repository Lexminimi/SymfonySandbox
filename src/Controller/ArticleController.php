<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ArticleController
{
  /**
       * @Route("/")
       */
  public function homepage()
  {
    return new Response('Maybe you should chew my fist');
  }

  /**
    * @Route("/news/why-asteroids-taste-like-bacon")
    */
   public function show()

   {
       return new Response('Future page to show one space article!');
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
