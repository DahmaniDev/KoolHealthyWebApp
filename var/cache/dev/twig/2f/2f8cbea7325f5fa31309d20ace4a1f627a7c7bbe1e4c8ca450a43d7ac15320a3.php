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

/* /about/about.html.twig */
class __TwigTemplate_b2b1a12a128ea91c4aeec3e9c1e31112793bcb86a7e2413a073ad8cf9c7ad80a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/about/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/about/about.html.twig"));

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
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"home\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"CalculateMyNeeds\">Calculate My Needs</a></li>
\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"about\">Prepared Meals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">Articles</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start header -->
\t<div class=\"all-page-title page-breadcrumb\">
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1>About Us</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End header -->
\t
\t<!-- Start About -->
\t<div class=\"about-section-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 text-center\">
\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
\t\t\t\t\t\t<h4>Little Story</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
\t\t\t\t\t\t<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Reservation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<img src=\"images/about-img.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"inner-pt\">
\t\t\t\t\t\t<p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
\t\t\t\t\t\t<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End About -->
\t
\t<!-- Start Menu -->
\t<div class=\"menu-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Special Menu</h2>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"row inner-menu-box\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">All</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Drinks</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Lunch</</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Dinner</a>
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
\t<!-- Start Contact info -->
\t<div class=\"contact-imfo-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-volume-control-phone\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Phone</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t+01 123-456-4590
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Email</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\tyourmail@gmail.com
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t800, Lorem Street, US
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
\t\t\t\t\t<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
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
\t\t\t\t\t<ul class=\"list-inline f-social\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Contact information</h3>
\t\t\t\t\t<p class=\"lead\">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
\t\t\t\t\t<p class=\"lead\"><a href=\"#\">+01 2000 800 9999</a></p>
\t\t\t\t\t<p><a href=\"#\"> info@admin.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Opening hours</h3>
\t\t\t\t\t<p><span class=\"text-color\">Monday: </span>Closed</p>
\t\t\t\t\t<p><span class=\"text-color\">Tue-Wed :</span> 9:Am - 10PM</p>
\t\t\t\t\t<p><span class=\"text-color\">Thu-Fri :</span> 9:Am - 10PM</p>
\t\t\t\t\t<p><span class=\"text-color\">Sat-Sun :</span> 5:PM - 10PM</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<p class=\"company-name\">All Rights Reserved. &copy; 2018 <a href=\"#\">Live Dinner Restaurant</a> Design By : 
\t\t\t\t\t<a href=\"https://html.design/\">html design</a></p>
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
        return "/about/about.html.twig";
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
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"home\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"CalculateMyNeeds\">Calculate My Needs</a></li>
\t\t\t\t\t\t<li class=\"nav-item active\"><a class=\"nav-link\" href=\"about\">Prepared Meals</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">Articles</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">Profile</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start header -->
\t<div class=\"all-page-title page-breadcrumb\">
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1>About Us</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End header -->
\t
\t<!-- Start About -->
\t<div class=\"about-section-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6 col-md-6 text-center\">
\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
\t\t\t\t\t\t<h4>Little Story</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
\t\t\t\t\t\t<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
\t\t\t\t\t\t<a class=\"btn btn-lg btn-circle btn-outline-new-white\" href=\"#\">Reservation</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<img src=\"images/about-img.jpg\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"inner-pt\">
\t\t\t\t\t\t<p>Sed tincidunt, neque at egestas imperdiet, nulla sapien blandit nunc, sit amet pulvinar orci nibh ut massa. Proin nec lectus sed nunc placerat semper. Duis hendrerit elit nec sapien porttitor, ut pretium ipsum feugiat. Aenean volutpat porta nisi in gravida. Curabitur pulvinar ligula sed facilisis bibendum. Nullam vitae nulla elit. </p>
\t\t\t\t\t\t<p>Integer purus velit, eleifend eu magna volutpat, porttitor blandit lectus. Aenean risus odio, efficitur quis erat eget, mattis tristique arcu. Fusce in ante enim. Integer consectetur elit nec laoreet rutrum. Mauris porta turpis nec tellus accumsan pellentesque. Morbi non quam tempus, convallis urna in, cursus mauris. </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End About -->
\t
\t<!-- Start Menu -->
\t<div class=\"menu-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Special Menu</h2>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"row inner-menu-box\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t<a class=\"nav-link active\" id=\"v-pills-home-tab\" data-toggle=\"pill\" href=\"#v-pills-home\" role=\"tab\" aria-controls=\"v-pills-home\" aria-selected=\"true\">All</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Drinks</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-messages-tab\" data-toggle=\"pill\" href=\"#v-pills-messages\" role=\"tab\" aria-controls=\"v-pills-messages\" aria-selected=\"false\">Lunch</</a>
\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-settings-tab\" data-toggle=\"pill\" href=\"#v-pills-settings\" role=\"tab\" aria-controls=\"v-pills-settings\" aria-selected=\"false\">Dinner</a>
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
\t<!-- Start Contact info -->
\t<div class=\"contact-imfo-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-volume-control-phone\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Phone</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t+01 123-456-4590
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 arrow-right\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Email</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\tyourmail@gmail.com
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<i class=\"fa fa-map-marker\"></i>
\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t<h4>Location</h4>
\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t800, Lorem Street, US
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
\t\t\t\t\t<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui.</p>
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
\t\t\t\t\t<ul class=\"list-inline f-social\">
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Contact information</h3>
\t\t\t\t\t<p class=\"lead\">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
\t\t\t\t\t<p class=\"lead\"><a href=\"#\">+01 2000 800 9999</a></p>
\t\t\t\t\t<p><a href=\"#\"> info@admin.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t<h3>Opening hours</h3>
\t\t\t\t\t<p><span class=\"text-color\">Monday: </span>Closed</p>
\t\t\t\t\t<p><span class=\"text-color\">Tue-Wed :</span> 9:Am - 10PM</p>
\t\t\t\t\t<p><span class=\"text-color\">Thu-Fri :</span> 9:Am - 10PM</p>
\t\t\t\t\t<p><span class=\"text-color\">Sat-Sun :</span> 5:PM - 10PM</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<p class=\"company-name\">All Rights Reserved. &copy; 2018 <a href=\"#\">Live Dinner Restaurant</a> Design By : 
\t\t\t\t\t<a href=\"https://html.design/\">html design</a></p>
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
</html>", "/about/about.html.twig", "C:\\Users\\tarza\\SymfonyProjects\\ProjetSymfony\\templates\\about\\about.html.twig");
    }
}
