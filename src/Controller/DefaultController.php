<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
   * @Route("/", name="home")
   */
   public function home():Response{
    return $this->render('base.html.twig');
  }
  /**
   * @Route("/menu", name="menu")
   */
  public function menu():Response{
    return $this->render('/menu/menu.html.twig');
  }
  /**
   * @Route("/about", name="about")
   */
  public function about():Response{
    return $this->render('/about/about.html.twig');
  }
  /**
   * @Route("/reservation", name="reservation")
   */
  public function reservation():Response{
    return $this->render('/reservation/reservation.html.twig');
  }
  /**
   * @Route("/stuff", name="stuff")
   */
  public function stuff():Response{
    return $this->render('/stuff/stuff.html.twig');
  }
  /**
   * @Route("/gallery", name="gallery")
   */
  public function gallery():Response{
    return $this->render('/gallery/gallery.html.twig');
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
  /**
   * @Route("/contact", name="contact")
   */
  public function contact():Response{
    return $this->render('/contact/contact.html.twig');
  }
}
