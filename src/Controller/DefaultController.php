<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
   * @Route("/", name="home_")
   */
   public function home_():Response{
    return $this->render('home.html.twig');
  }
   /**
   * @Route("/home", name="home")
   */
  public function home():Response{
    return $this->render('home.html.twig');
  }
  /**
   * @Route("/CalculateMyNeeds", name="CalculateMyNeeds")
   */
  public function CalculateMyNeeds():Response{
    return $this->render('/CalculateMyNeeds/CalculateMyNeeds.html.twig');
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
   * @Route("/blog-details", name="blog-details")
   */
  public function blogdetail():Response{
    return $this->render('/blog-detail/blog-detail.html.twig');
  }
}
