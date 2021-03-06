<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_cd7715d02fe11c9bf330b021c3670eed5a05cd7d0b022ba3353b55b4c0709909 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\"><!-- Basic -->
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">   
   
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 
     <!-- Site Metas -->
    <title>Kool Healthy PFE</title>  
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">    
\t<!-- Site CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">    
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"css/custom.css\">

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
\t<!-- Start header -->
\t<header class=\"top-navbar\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\" />
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars-rs-food\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbars-rs-food\">
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"home\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"CalculateMyNeeds\">Calculate My Needs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"PreparedMeals\">Prepared Meals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Articles\">Articles</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Profile\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start slides -->
\t<div id=\"slides\" class=\"cover-slides\">
\t\t<ul class=\"slides-container\">
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-01.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-02.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-03.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"slides-navigation\">
\t\t\t<a href=\"#\" class=\"next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t<a href=\"#\" class=\"prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t</div>
\t<!-- End slides -->
\t
\t<!-- Start About -->
\t<div class=\"about-section-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 text-center\">
\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t<h1>Welcome To <span>Kool Healthy</span></h1>
\t\t\t\t\t\t<h4>What We Do ?</h4>
\t\t\t\t\t\t<p>It's a service that calculates your caloric needs, we match that with your food preferences that you pick and then we prepare and deliver your healthy and balanced meal(s). </p>
\t\t\t\t\t\t<h4>How Does It Work ?</h4>
\t\t\t\t\t\t<p>1- We calculate your needs<br>2- You choose your food preferences and confirm your order<br>3- We prepare it and deliver it to you</p>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<img src=\"images/about-img.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End About -->
\t
\t<!-- Start Goal -->
\t<div class=\"qt-box qt-background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 ml-auto mr-auto text-center\">
\t\t\t\t\t<span class=\"lead\">What's Our Goal ?</span>

\t\t\t\t\t<p class=\"lead \">
\t\t\t\t\t\tHelp people prepare their healthy meals while they're busy at work, school or anywhere.<br>
\t\t\t\t\t\tWe also make people more aware about their bodies and what they actually need in their meals, nutritional awarness is the key to a healthy life
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Goal -->
\t
\t<!-- Start Menu -->
\t<div class=\"menu-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Special Meals</h2>
\t\t\t\t\t\t<p>Get your favorite healthy meal</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row inner-menu-box\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">All</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Fish Based Meal</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Meal Based Meal</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Vegan Based Meal</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-01.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Baked or Broiled Fish</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>200 Kcal / 40g Protein / 20g Fats / 50g Carbs</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> 15.0 DT</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-02.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$9.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-03.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$10.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-04.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$15.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-05.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$18.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-06.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$20.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-07.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$25.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-08.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$22.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-09.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$24.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-01.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$7.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-02.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$9.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-03.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$10.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-04.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$15.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-05.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$18.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-06.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$20.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-07.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$25.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-08.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$22.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-09.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$24.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<!-- End Menu -->
\t
\t<!-- Start Gallery -->
\t<div class=\"gallery-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Gallery</h2>
\t\t\t\t\t\t<p>Check out ones of our best delivered meals</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tz-gallery\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-01.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-01.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-02.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-02.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-03.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-03.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-04.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-04.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-05.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-05.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-06.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-06.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Gallery -->
\t
\t<!-- Start Customer Reviews -->
\t<div class=\"customer-reviews-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Customer Reviews</h2>
\t\t\t\t\t\t<p>Check out what customers have to say about our service</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mr-auto ml-auto text-center\">
\t\t\t\t\t<div id=\"reviews\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<div class=\"carousel-inner mt-4\">
\t\t\t\t\t\t\t<div class=\"carousel-item text-center active\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Paul Mitchel</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Student</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">One of the best meals I had, well prepared and well delivered. <br>Thank you Kool Healthy</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Steve Fonsi</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Web Designer</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Daniel vebar</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Seo Analyst</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#reviews\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#reviews\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Customer Reviews -->
\t
\t<!-- Start Contact info -->
\t<div class=\"contact-imfo-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-volume-control-phone\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Phone</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t+216 52-680-290
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Email</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\tkool.healthy.contact@gmail.com
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t5000, Monastir, Tunisia
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Contact info -->
\t
\t<!-- Start Footer -->
\t<footer class=\"footer-area bg-f\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t<p>Kool Healthy is a Meal-Prep Service based in Tunisia. Founded in 2020 with the help of : Mr. Sami Bhiri and OneDev</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Subscribe</h3>
\t\t\t\t\t<div class=\"subscribe_form\">
\t\t\t\t\t\t<form class=\"subscribe_form\">
\t\t\t\t\t\t\t<input name=\"EMAIL\" id=\"subs-email\" class=\"form_input\" placeholder=\"Email Address...\" type=\"email\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"submit\">SUBSCRIBE</button>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Contact information</h3>
\t\t\t\t\t<p class=\"lead\">Monastir</p>
\t\t\t\t\t<p class=\"lead\"><a href=\"#\">+216 52 680 290</a></p>
\t\t\t\t\t<p><a href=\"#\"> kool.healthy.contact@gmail.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t<ul class=\"list-inline f-social\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<p class=\"company-name\">All Rights Reserved. &copy; 2020 <a href=\"#\">Kool Healthy</a> Developped By : 
\t\t\t\t\t<a href=\"https://github.com/DahmaniDev\">DahmaniDev</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</footer>
\t<!-- End Footer -->
\t
\t<a href=\"#\" id=\"back-to-top\" title=\"Back to top\" style=\"display: none;\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i></a>

\t<!-- ALL JS FILES -->
\t<script src=\"js/jquery-3.2.1.min.js\"></script>
\t<script src=\"js/popper.min.js\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
    <!-- ALL PLUGINS -->
\t<script src=\"js/jquery.superslides.min.js\"></script>
\t<script src=\"js/images-loded.min.js\"></script>
\t<script src=\"js/isotope.min.js\"></script>
\t<script src=\"js/baguetteBox.min.js\"></script>
\t<script src=\"js/form-validator.min.js\"></script>
    <script src=\"js/contact-form-script.js\"></script>
    <script src=\"js/custom.js\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\"><!-- Basic -->
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">   
   
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
 
     <!-- Site Metas -->
    <title>Kool Healthy PFE</title>  
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\" type=\"image/x-icon\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">    
\t<!-- Site CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">    
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"css/responsive.css\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"css/custom.css\">

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>
\t<!-- Start header -->
\t<header class=\"top-navbar\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<img src=\"images/logo.png\" alt=\"\" />
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbars-rs-food\" aria-controls=\"navbars-rs-food\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t  <span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbars-rs-food\">
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"home\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"CalculateMyNeeds\">Calculate My Needs</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"PreparedMeals\">Prepared Meals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Articles\">Articles</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Profile\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"Contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start slides -->
\t<div id=\"slides\" class=\"cover-slides\">
\t\t<ul class=\"slides-container\">
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-01.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-02.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"text-left\">
\t\t\t\t<img src=\"images/slider-03.jpg\" alt=\"\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<h1 class=\"m-b-20\"><strong>Welcome To <br> Kool Healthy</strong></h1>
\t\t\t\t\t\t\t<p class=\"m-b-40\">Prepare your meal according to your nutrition needs,  <br> 
\t\t\t\t\t\t\twell cooked, well calculated, and most importantly... Healthy</p>
\t\t\t\t\t\t\t<p><a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"slides-navigation\">
\t\t\t<a href=\"#\" class=\"next\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
\t\t\t<a href=\"#\" class=\"prev\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a>
\t\t</div>
\t</div>
\t<!-- End slides -->
\t
\t<!-- Start About -->
\t<div class=\"about-section-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 text-center\">
\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t<h1>Welcome To <span>Kool Healthy</span></h1>
\t\t\t\t\t\t<h4>What We Do ?</h4>
\t\t\t\t\t\t<p>It's a service that calculates your caloric needs, we match that with your food preferences that you pick and then we prepare and deliver your healthy and balanced meal(s). </p>
\t\t\t\t\t\t<h4>How Does It Work ?</h4>
\t\t\t\t\t\t<p>1- We calculate your needs<br>2- You choose your food preferences and confirm your order<br>3- We prepare it and deliver it to you</p>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Order Now</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t<img src=\"images/about-img.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End About -->
\t
\t<!-- Start Goal -->
\t<div class=\"qt-box qt-background\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 ml-auto mr-auto text-center\">
\t\t\t\t\t<span class=\"lead\">What's Our Goal ?</span>

\t\t\t\t\t<p class=\"lead \">
\t\t\t\t\t\tHelp people prepare their healthy meals while they're busy at work, school or anywhere.<br>
\t\t\t\t\t\tWe also make people more aware about their bodies and what they actually need in their meals, nutritional awarness is the key to a healthy life
\t\t\t\t\t</p>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Goal -->
\t
\t<!-- Start Menu -->
\t<div class=\"menu-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Special Meals</h2>
\t\t\t\t\t\t<p>Get your favorite healthy meal</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row inner-menu-box\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">All</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Fish Based Meal</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Meal Based Meal</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Vegan Based Meal</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-home\" role=\"tabpanel\" aria-labelledby=\"v-pills-home-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-01.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Baked or Broiled Fish</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>200 Kcal / 40g Protein / 20g Fats / 50g Carbs</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> 15.0 DT</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-02.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$9.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-03.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$10.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-04.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$15.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-05.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$18.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-06.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$20.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-07.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$25.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-08.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$22.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-09.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$24.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-profile\" role=\"tabpanel\" aria-labelledby=\"v-pills-profile-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-01.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$7.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-02.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$9.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid drinks\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-03.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Drinks 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$10.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-messages\" role=\"tabpanel\" aria-labelledby=\"v-pills-messages-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-04.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$15.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-05.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$18.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid lunch\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-06.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Lunch 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$20.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-settings\" role=\"tabpanel\" aria-labelledby=\"v-pills-settings-tab\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-07.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 1</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$25.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-08.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 2</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$22.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6 special-grid dinner\">
\t\t\t\t\t\t\t\t\t<div class=\"gallery-single fix\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/img-09.jpg\" class=\"img-fluid\" alt=\"Image\">
\t\t\t\t\t\t\t\t\t\t<div class=\"why-text\">
\t\t\t\t\t\t\t\t\t\t\t<h4>Special Dinner 3</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>Sed id magna vitae eros sagittis euismod.</p>
\t\t\t\t\t\t\t\t\t\t\t<h5> \$24.79</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<!-- End Menu -->
\t
\t<!-- Start Gallery -->
\t<div class=\"gallery-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Gallery</h2>
\t\t\t\t\t\t<p>Check out ones of our best delivered meals</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tz-gallery\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-01.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-01.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-02.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-02.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-03.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-03.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-12 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-04.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-04.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-05.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-05.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<a class=\"lightbox\" href=\"images/gallery-img-06.jpg\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"images/gallery-img-06.jpg\" alt=\"Gallery Images\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Gallery -->
\t
\t<!-- Start Customer Reviews -->
\t<div class=\"customer-reviews-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Customer Reviews</h2>
\t\t\t\t\t\t<p>Check out what customers have to say about our service</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 mr-auto ml-auto text-center\">
\t\t\t\t\t<div id=\"reviews\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t<div class=\"carousel-inner mt-4\">
\t\t\t\t\t\t\t<div class=\"carousel-item text-center active\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Paul Mitchel</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Student</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">One of the best meals I had, well prepared and well delivered. <br>Thank you Kool Healthy</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Steve Fonsi</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Web Designer</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"carousel-item text-center\">
\t\t\t\t\t\t\t\t<div class=\"img-box p-1 border rounded-circle m-auto\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100 rounded-circle\" src=\"images/quotations-button.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h5 class=\"mt-4 mb-0\"><strong class=\"text-warning text-uppercase\">Daniel vebar</strong></h5>
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Seo Analyst</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#reviews\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#reviews\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Customer Reviews -->
\t
\t<!-- Start Contact info -->
\t<div class=\"contact-imfo-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-volume-control-phone\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Phone</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t+216 52-680-290
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Email</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\tkool.healthy.contact@gmail.com
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t5000, Monastir, Tunisia
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End Contact info -->
\t
\t<!-- Start Footer -->
\t<footer class=\"footer-area bg-f\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>About Us</h3>
\t\t\t\t\t<p>Kool Healthy is a Meal-Prep Service based in Tunisia. Founded in 2020 with the help of : Mr. Sami Bhiri and OneDev</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Subscribe</h3>
\t\t\t\t\t<div class=\"subscribe_form\">
\t\t\t\t\t\t<form class=\"subscribe_form\">
\t\t\t\t\t\t\t<input name=\"EMAIL\" id=\"subs-email\" class=\"form_input\" placeholder=\"Email Address...\" type=\"email\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"submit\">SUBSCRIBE</button>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Contact information</h3>
\t\t\t\t\t<p class=\"lead\">Monastir</p>
\t\t\t\t\t<p class=\"lead\"><a href=\"#\">+216 52 680 290</a></p>
\t\t\t\t\t<p><a href=\"#\"> kool.healthy.contact@gmail.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t<ul class=\"list-inline f-social\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<p class=\"company-name\">All Rights Reserved. &copy; 2020 <a href=\"#\">Kool Healthy</a> Developped By : 
\t\t\t\t\t<a href=\"https://github.com/DahmaniDev\">DahmaniDev</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</footer>
\t<!-- End Footer -->
\t
\t<a href=\"#\" id=\"back-to-top\" title=\"Back to top\" style=\"display: none;\"><i class=\"fa fa-paper-plane-o\" aria-hidden=\"true\"></i></a>

\t<!-- ALL JS FILES -->
\t<script src=\"js/jquery-3.2.1.min.js\"></script>
\t<script src=\"js/popper.min.js\"></script>
\t<script src=\"js/bootstrap.min.js\"></script>
    <!-- ALL PLUGINS -->
\t<script src=\"js/jquery.superslides.min.js\"></script>
\t<script src=\"js/images-loded.min.js\"></script>
\t<script src=\"js/isotope.min.js\"></script>
\t<script src=\"js/baguetteBox.min.js\"></script>
\t<script src=\"js/form-validator.min.js\"></script>
    <script src=\"js/contact-form-script.js\"></script>
    <script src=\"js/custom.js\"></script>
</body>
</html>", "base.html.twig", "C:\\Users\\tarza\\SymfonyProjects\\ProjetSymfony\\templates\\base.html.twig");
    }
}
