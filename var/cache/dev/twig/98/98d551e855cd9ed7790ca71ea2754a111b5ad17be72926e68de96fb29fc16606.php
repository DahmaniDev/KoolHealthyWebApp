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

/* /gallery/gallery.html.twig */
class __TwigTemplate_9f06086fc9a3b74054310369967d6cfd678e570f0736ebd30e0868852263d59c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/gallery/gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/gallery/gallery.html.twig"));

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
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"menu\">Menu</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">About</a></li>
\t\t\t\t\t\t<li class=\"nav-item active dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"reservation.html\">Reservation</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"stuff\">Stuff</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"gallery\">Gallery</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Blog</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog\">blog</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-details\">blog Single</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start All Pages -->
\t<div class=\"all-page-title page-breadcrumb\">
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1>Gallery</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End All Pages -->
\t
\t<!-- Start Gallery -->
\t<div class=\"gallery-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Gallery</h2>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Web Developer</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
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
        return "/gallery/gallery.html.twig";
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
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"/\">Home</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"menu\">Menu</a></li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"about\">About</a></li>
\t\t\t\t\t\t<li class=\"nav-item active dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Pages</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"reservation.html\">Reservation</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"stuff\">Stuff</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"gallery\">Gallery</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown-a\" data-toggle=\"dropdown\">Blog</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdown-a\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog\">blog</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-details\">blog Single</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\"><a class=\"nav-link\" href=\"contact\">Contact</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>
\t<!-- End header -->
\t
\t<!-- Start All Pages -->
\t<div class=\"all-page-title page-breadcrumb\">
\t\t<div class=\"container text-center\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1>Gallery</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- End All Pages -->
\t
\t<!-- Start Gallery -->
\t<div class=\"gallery-box\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"heading-title text-center\">
\t\t\t\t\t\t<h2>Gallery</h2>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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
\t\t\t\t\t\t\t\t<h6 class=\"text-dark m-0\">Web Developer</h6>
\t\t\t\t\t\t\t\t<p class=\"m-0 pt-3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
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
</html>", "/gallery/gallery.html.twig", "C:\\Users\\Dahmani\\SymfonyProjects\\ProjetFE\\templates\\gallery\\gallery.html.twig");
    }
}
