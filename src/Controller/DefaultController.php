<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Recette;

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
    $bmrResult;
    $weight=$user->getWeight();
    $height=$user->getHeight();
    $age=$user->getAge();
    $activityLevel=$user->getActivityLevel();
    $goal=$user->getGoal();
    $protein;
    $fats;
    $calories;
    $carbs;
    $proteinPercentage;
    $carbsPercentage;
    $fatsPercentage;

    if($user->getSexe() == 'Homme')
    {
      $bmr= 10 * $weight + 6.25 * $height - 5 * $age + 5;
    }
    else if($user->getSexe() == 'Femme')
    {
      $bmr= 10 * $weight + 6.25 * $height - 5 * $age - 161;
    }
    switch($activityLevel)
    {
      case "Pas Actif" : $bmrResult = 1.2 * $bmr;
      break;
      case "Un Peu Actif" : $bmrResult = 1.4 * $bmr;
      break;
      case "Actif" : $bmrResult = 1.6 * $bmr;
      break;
      case "Super Actif" : $bmrResult = 1.9 * $bmr;
      break;
      default : $bmrResult = 1.4 * $bmr;
      break;
    }
    switch($goal)
    {
      case "Prendre du poids" : $calories = $bmrResult + (0.15 * $bmrResult); $fats= (0.3 * $calories)/9 ;$protein=($calories * 0.3)/4; $carbs = ($calories * 0.4)/4; $proteinPercentage=30; $fatsPercentage=30; $carbsPercentage=40;
      break;
      case "Maintenir le poids" : $calories = $bmrResult; $fats= (0.2 * $calories)/9 ;$protein=($calories * 0.4)/4; $carbs = ($calories * 0.4)/4; $proteinPercentage=30; $fatsPercentage=20; $carbsPercentage=40;
      break;
      case "Perdre du poids" : $calories = $bmrResult - (0.15 * $bmrResult); $fats= (0.2 * $calories)/9 ;$protein=($calories * 0.45)/4; $carbs = ($calories * 0.35)/4; $proteinPercentage=45; $fatsPercentage=20; $carbsPercentage=35;
      break;
      default : $calories = $bmrResult; $fats= (0.3 * $calories)/9 ;$protein=($calories * 0.3)/4; $carbs = ($calories * 0.4)/4;
      break;
    }
    return $this->render('/CalculateMyNeeds/CalculateMyNeeds.html.twig',[
      'controller_name' => 'DefaultController',
      'user'=>$user,
      'calories'=>$calories,
      'protein'=>$protein,
      'fats'=>$fats,
      'carbs'=>$carbs,
      'proteinPercentage'=>$proteinPercentage,
      'fatsPercentage'=>$fatsPercentage,
      'carbsPercentage'=>$carbsPercentage
    ]);
  }
  /**
   * @Route("/Articles", name="Articles")
   */
  public function Articles():Response{
    $articles=$this->getDoctrine()->getRepository(Article::class)->findAll();
    $recettes=$this->getDoctrine()->getRepository(Recette::class)->findAll();
    foreach($articles as $key=>$value)
    {
      $value->setImage(base64_encode(stream_get_contents($value->getImage())));
    }
    foreach($recettes as $key=>$value)
    {
      $value->setImage(base64_encode(stream_get_contents($value->getImage())));
    }
    return $this->render('/articles/articles.html.twig',[
      'actualité1'=>$articles[0],
      'actualité2'=>$articles[1],
      'actualité3'=>$articles[2],
      'recette1'=>$recettes[0],
      'recette2'=>$recettes[1],
      'recette3'=>$recettes[2]
    ]);
  }
  /**
   * @Route("/PreparedMeals", name="PreparedMeals")
   */
  public function PreparedMeals():Response{
    return $this->render('/preparedmeals/preparedmeals.html.twig');
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
   * @Route("/blog/{id}", name="blog")
   */
  public function blog($id):Response{
    $article=$this->getDoctrine()->getRepository(Article::class)->find($id);
    $article->setImage(base64_encode(stream_get_contents($article->getImage())));
    return $this->render('/blog/blog.html.twig',[
      'article'=>$article
    ]);
  }
  /**
   * @Route("/recette/{id}", name="recette")
   */
  public function recette($id):Response{
    $recette=$this->getDoctrine()->getRepository(Recette::class)->find($id);
    $recette->setImage(base64_encode(stream_get_contents($recette->getImage())));
    return $this->render('/recette/recette.html.twig',[
      'recette'=>$recette
    ]);
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
