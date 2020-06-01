<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;

class DefaultController extends AbstractController
{
   /**
   * @Route("/home", name="home")
   */
  public function home():Response{
    return $this->render('home.html.twig');
  }
  /**
   * @Route("/CalculateMyNeeds/{id}", name="CalculateMyNeeds")
   */
  public function CalculateMyNeeds($id):Response{
    $user=$this->getDoctrine()->getRepository(User::class)->find($id);
    $bmr;
    $weight=$user->getWeight();
    $height=$user->getHeight();
    $age=$user->getAge();

    if($user->getSexe() == 'Homme')
    {
      $bmr= 10 * $weight + 6.25 * $height - 5 * $age - 161;
    }
    return $this->render('/CalculateMyNeeds/CalculateMyNeeds.html.twig',[
      'controller_name' => 'DefaultController',
      'user'=>$user,
      'bmr'=>$bmr
    ]);
  }
  /**
   * @Route("/PreparedMeals", name="PreparedMeals")
   */
  public function PreparedMeals():Response{
    return $this->render('/preparedmeals/preparedmeals.html.twig');
  }
  /**
   * @Route("/Articles", name="Articles")
   */
  public function Articles():Response{
    return $this->render('/articles/articles.html.twig');
  }
  /**
   * @Route("/Profile", name="Profile")
   */
  public function Profile():Response{
    return $this->render('/profile/profile.html.twig');
  }
  /**
   * @Route("/Contact", name="Contact")
   */
  public function contact():Response{
    return $this->render('/contact/contact.html.twig');
  }
  /**
   * @Route("/blog", name="blog")
   */
  public function blog():Response{
    return $this->render('/blog/blog.html.twig');
  }
  /**
   * @Route("/partenariat", name="partenariat")
   */
  public function partenariat():Response{
    return $this->render('/partenariat/partenariat.html.twig');
  }
  /**
   * @Route("/repas", name="repas")
   */
  public function repas():Response{
    return $this->render('/repas/repas.html.twig');
  }
}
