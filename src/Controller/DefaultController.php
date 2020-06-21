<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Recette;
use App\Entity\Message;
use App\Entity\Besoins;
use App\Entity\Repas;
use App\Entity\Traiteur;
use App\Entity\Commande;
use App\Form\PartenariatType;
use App\Form\ContactType;
use App\Form\ModifierProfilType;

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
    $em=$this->getDoctrine()->getManager();
    $user=$this->getDoctrine()->getRepository(User::class)->find($id);
    $besoins_test=$this->getDoctrine()->getRepository(Besoins::class)->find($id);
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
    
    if($besoins_test == NULL)
    {
      $besoins = new Besoins();
      $besoins->setUserId($user);
    }
    else
    {
      $besoins=$besoins_test;
    }
    $besoins->setProtein((int) $protein);
    $besoins->setCalories((int) $calories);
    $besoins->setFats((int) $fats);
    $besoins->setCarbs((int) $carbs);

    $em->persist($besoins);
    $em->flush();
    return $this->render('/CalculateMyNeeds/CalculateMyNeeds.html.twig',[
      'controller_name' => 'DefaultController',
      'user'=>$user,
      'calories'=>$calories,
      'protein'=>$protein,
      'fats'=>$fats,
      'carbs'=>$carbs,
      'proteinPercentage'=>$proteinPercentage,
      'fatsPercentage'=>$fatsPercentage,
      'carbsPercentage'=>$carbsPercentage,
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
      'actualités'=>$articles,
      'recettes'=>$recettes
    ]);
  }
  /**
   * @Route("/PreparedMeals", name="PreparedMeals")
   */
  public function PreparedMeals():Response{
    $meals=$this->getDoctrine()->getRepository(Repas::class)->findAll();
    foreach($meals as $key=>$value)
    {
      $value->setImage(base64_encode(stream_get_contents($value->getImage())));
    }
    $veg_meals=$this->getDoctrine()->getRepository(Repas::class)->findBy(array('type' => 'Végétarien'));
    $chick_meals=$this->getDoctrine()->getRepository(Repas::class)->findBy(array('type' => 'Poulet'));
    $seaf_meals=$this->getDoctrine()->getRepository(Repas::class)->findBy(array('type' => 'FruitsDeMer'));
    return $this->render('/preparedmeals/preparedmeals.html.twig',[
      'meals'=>$meals,
    ]);
  }
  /**
   * @Route("/PreparemyMeal/{calories}", name="PreparemyMeal")
   */
  public function PreparemyMeal($calories):Response{
    $marge=range(($calories/3)-100,($calories/3)+100);
    $meals=$this->getDoctrine()->getRepository(Repas::class)->findBy(array('cal_val' => $marge));
    foreach($meals as $key=>$value)
    {
      $value->setImage(base64_encode(stream_get_contents($value->getImage())));
    }
    return $this->render('/preparemymeal/preparemymeal.html.twig',[
      'meals'=>$meals,
    ]);
  }
  
  /**
   * @Route("/Profile/{id}", name="Profile")
   */
  public function Profile($id):Response{
    $user=$this->getDoctrine()->getRepository(User::class)->find($id);
    if($user->getImage() != NULL){
      $user->setImage(base64_encode(stream_get_contents($user->getImage())));
    }
    
    return $this->render('/profile/profile.html.twig',[
      'user'=>$user,
    ]);
  }
  /**
   * @Route("/Profile/{id}/Commandes", name="Commandes")
   */
  public function Commandes($id):Response{
    $commandes=$this->getDoctrine()->getRepository(Commande::class)->findBy(array('id_user' => $id));
    $meals=$this->getDoctrine()->getRepository(Repas::class)->findAll();
    $traiteurs=$this->getDoctrine()->getRepository(Traiteur::class)->findAll();
    return $this->render('/commandes/commandes.html.twig',[
      'commandes'=>$commandes,
      'repas'=>$meals,
      'traiteurs'=>$traiteurs
    ]);
  }
  /**
   * @Route("/Contact", name="Contact")
   */
  public function contact(Request $request):Response{
    $user = $this->getUser();
    $message = new Message();
    $form = $this->createForm(ContactType::class,$message);

    if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
      $message->setDate(new \DateTime('now'));
      $message->setType('Contact');
      $message->setNom($user->getNom());
      $message->setEmail($user->getUsername());
      
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($message);
      $entityManager->flush();
    }
    
    return $this->render('/contact/contact.html.twig',[
      'form' => $form->createView()
    ]);
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
  public function partenariat(Request $request):Response{
    $message = new Message();
    $form = $this->createForm(PartenariatType::class,$message);
    

    if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
      $message->setDate(new \DateTime('now'));
      $message->setType('Partenariat');

      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($message);
      $entityManager->flush();
    }
    return $this->render('/partenariat/partenariat.html.twig',[
      'form' => $form->createView()
    ]);
  }
  /**
   * @Route("/repas/{id}", name="repas")
   */
  public function repas($id):Response{
    $repas=$this->getDoctrine()->getRepository(Repas::class)->find($id);
    $repas->setImage(base64_encode(stream_get_contents($repas->getImage())));
    $traiteur=$this->getDoctrine()->getRepository(Traiteur::class)->find($repas->getIdTraiteur());
    return $this->render('/repas/repas.html.twig',[
      'repas'=>$repas,
      'traiteur'=>$traiteur
    ]);
  }
  /**
   * @Route("/commander-repas/{id}", name="commanderrepas")
   */
  public function commanderrepas($id):Response{
    $repas=$this->getDoctrine()->getRepository(Repas::class)->find($id);
    $repas->setImage(base64_encode(stream_get_contents($repas->getImage())));
    $traiteur=$this->getDoctrine()->getRepository(Traiteur::class)->find($repas->getIdTraiteur());
    return $this->render('/commanderRepas/commanderRepas.html.twig',[
      'repas'=>$repas,
      'traiteur'=>$traiteur
    ]);
  }
  /**
   * @Route("/Profile/{id}/ModifierProfile", name="ModiferProfile")
   */
  public function ModifierProfile($id, Request $request):Response{
    $user=$this->getDoctrine()->getRepository(User::class)->find($id);
    $form = $this->createForm(ModifierProfilType::class,$user);

    if($user->getImage() != NULL){
      $user->setImage(base64_encode(stream_get_contents($user->getImage())));
    }
    if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($user);
      $entityManager->flush();
    }
    return $this->render('/ModifierProfile/ModifierProfile.html.twig',[
      'user'=>$user,
      'form' => $form->createView()
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789", name="adminInterface")
   */
  public function adminInterface():Response{
    return $this->render('/interfaceadmin/interfaceadmin.html.twig');
  }
  /**
   * @Route("/admin-kool-healthy-123456789-historiques-commandes", name="adminHistoriqueCommandes")
   */
  public function adminHistoriqueCommandes():Response{
    $commandes=$this->getDoctrine()->getRepository(Commande::class)->findAll();
    return $this->render('/interfaceadmin/historiqueComm.html.twig',[
      'commandes'=>$commandes
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-liste-traiteur", name="adminListeTraiteur")
   */
  public function adminListeTraiteur():Response{
    $traiteurs=$this->getDoctrine()->getRepository(Traiteur::class)->findAll();
    return $this->render('/interfaceadmin/listeTraiteur.html.twig',[
      'traiteurs'=>$traiteurs
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-liste-membre", name="adminListeMembre")
   */
  public function adminListeMembre():Response{
    $membres=$this->getDoctrine()->getRepository(User::class)->findAll();
    return $this->render('/interfaceadmin/listeMembre.html.twig',[
      'membres'=>$membres
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-liste-messages", name="adminListeMessages")
   */
  public function adminListeMessages():Response{
    $messages=$this->getDoctrine()->getRepository(Message::class)->findAll();
    return $this->render('/interfaceadmin/listeMessage.html.twig',[
      'messages'=>$messages
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-upload-article", name="adminUploadArticle")
   */
  public function adminUploadArticle():Response{
    return $this->render('/interfaceadmin/uploadarticle.html.twig');
  }
  /**
   * @Route("/admin-kool-healthy-123456789-liste-article", name="adminListeArticle")
   */
  public function adminListeArticle():Response{
    $actualités=$this->getDoctrine()->getRepository(Article::class)->findAll();
    $recettes=$this->getDoctrine()->getRepository(Recette::class)->findAll();
    return $this->render('/interfaceadmin/listeArticle.html.twig',[
      'actualités'=>$actualités,
      'recettes'=>$recettes
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-supprimer-article/{id}", name="adminSupprimerArticle")
   */
  public function adminSupprimerArticle($id):Response{
    $em=$this->getDoctrine()->getManager();
    $actualité=$this->getDoctrine()->getRepository(Article::class)->find($id);
    $em->remove($actualité);
    $em->flush();
    return $this->render('/interfaceadmin/suppressionArticle.html.twig',[
      'actualité'=>$actualité
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-supprimer-recette/{id}", name="adminSupprimerRecette")
   */
  public function adminSupprimerRecette($id):Response{
    $em=$this->getDoctrine()->getManager();
    $recette=$this->getDoctrine()->getRepository(Recette::class)->find($id);
    $em->remove($recette);
    $em->flush();
    return $this->render('/interfaceadmin/suppressionRecette.html.twig',[
      'recette'=>$recette
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-ajout-traiteur", name="adminAjoutTraiteur")
   */
  public function adminAjoutTraiteur():Response{
    return $this->render('/interfaceadmin/ajoutTraiteur.html.twig');
  }
  /**
   * @Route("/admin-kool-healthy-123456789-modifier-traiteur/{id}", name="adminModifierTraiteur")
   */
  public function adminModifierTraiteur($id):Response{
    $traiteur=$this->getDoctrine()->getRepository(Traiteur::class)->find($id);
    return $this->render('/interfaceadmin/modifierTraiteur.html.twig',[
      'traiteur'=>$traiteur
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-supprimer-traiteur/{id}", name="adminSupprimerTraiteur")
   */
  public function adminSupprimerTraiteur($id):Response{
    $em=$this->getDoctrine()->getManager();
    $traiteur=$this->getDoctrine()->getRepository(Traiteur::class)->find($id);
    $meals=$this->getDoctrine()->getRepository(Repas::class)->findBy(array('id_traiteur' => $id));
    foreach($meals as $key=>$value)
    {
      $em->remove($value);
    }
    
    $em->remove($traiteur);
    $em->flush();

    return $this->render('/interfaceadmin/suppressionTraiteur.html.twig',[
      'traiteur'=>$traiteur
    ]);
  }
  /**
   * @Route("/admin-kool-healthy-123456789-supprimer-user/{id}", name="adminSupprimerUser")
   */
  public function adminSupprimerUser($id):Response{
    $em=$this->getDoctrine()->getManager();
    $user=$this->getDoctrine()->getRepository(User::class)->find($id);
    $em->remove($user);
    $em->flush();

    return $this->render('/interfaceadmin/suppressionUser.html.twig',[
      'user'=>$user
    ]);
  }
}


