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
class __TwigTemplate_94ec74f1f75a6de833abee613eb8231a324343edab104543cebd0a742787ccdc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'sidebar' => [$this, 'block_sidebar'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/img/apple-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/img/favicon.png"), "html", null, true);
        echo "\">

        ";
        // line 13
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "


    </head>
    <body class=\"g-sidenav-show  bg-gray-200\">

    ";
        // line 29
        $this->displayBlock('sidebar', $context, $blocks);
        // line 162
        echo "    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
        <!-- Navbar -->
        ";
        // line 164
        $this->displayBlock('header', $context, $blocks);
        // line 276
        echo "        <div class=\"container-fluid py-4\">
            ";
        // line 277
        $this->displayBlock('body', $context, $blocks);
        // line 282
        echo "        </div>

        ";
        // line 284
        $this->displayBlock('footer', $context, $blocks);
        // line 319
        echo "    </main>
    ";
        // line 320
        $this->displayBlock('javascripts', $context, $blocks);
        // line 330
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"), "html", null, true);
        echo "\" />

            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/icon?family=Material+Icons+Round"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link id=\"pagestyle\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/css/material-dashboard.css?v=3.0.2"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
           <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://kit.fontawesome.com/42d5adcbca.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "        <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
            <div class=\"sidenav-header\">
                <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
                <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/img/logo-ct.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
                    <span class=\"ms-1 font-weight-bold text-white\">Dashboard</span>
                </a>
            </div>
            <hr class=\"horizontal light mt-0 mb-2\">
            <div class=\"collapse navbar-collapse  w-auto  max-height-vh-100\" id=\"sidenav-collapse-main\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white active bg-gradient-primary\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Front</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">table_view</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">User</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">receipt_long</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Evenement</span>
                        </a>
                    </li>
                      <ul>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-white \" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_arb");
        echo "\">
                        <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"fas fa-basketball-ball\"></i>
                        </div>

                        <span class=\"nav-link-text ms-1\">Match</span>

                        <a class=\"text-red text-center\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_arb");
        echo "\">Arbitre</a> <br>
                        <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_match");
        echo "\">Foot</a>




                    </a>
                </li>
            </ul>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terrain");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Terrain</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_club");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Club</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white active bg-gradient-primary\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chary_index");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">receipt_long</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Statistque club</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_CategorieStock");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">notifications</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Categorie Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_list");
        echo "\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">notifications</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item mt-3\">
                        <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/profile.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">person</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Profile</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/sign-in.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">login</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Sign In</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/sign-up.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">assignment</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
                <div class=\"mx-3\">
                    <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
                </div>
            </div>
        </aside>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 164
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 165
        echo "        <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" navbar-scroll=\"true\">
            <div class=\"container-fluid py-1 px-3\">
                <nav aria-label=\"breadcrumb\">

                </nav>
                <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group input-group-outline\">
                            <label class=\"form-label\">Type here...</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <ul class=\"navbar-nav  justify-content-end\">
                        <li class=\"nav-item d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body font-weight-bold px-0\">
                                <i class=\"fa fa-user me-sm-1\"></i>
                                <span class=\"d-sm-inline d-none\">Sign In</span>
                            </a>
                        </li>
                        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                                <div class=\"sidenav-toggler-inner\">
                                    <i class=\"sidenav-toggler-line\"></i>
                                    <i class=\"sidenav-toggler-line\"></i>
                                    <i class=\"sidenav-toggler-line\"></i>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item px-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell cursor-pointer\"></i>
                            </a>
                            <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"./assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New message</span> from Laur
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"./assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New album</span> by Travis Scott
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                                    <title>credit-card</title>
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                            <g transform=\"translate(1716.000000, 291.000000)\">
                                                                <g transform=\"translate(453.000000, 454.000000)\">
                                                                    <path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
                                                                    <path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    Payment successfully completed
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 278
        echo "


            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 284
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 285
        echo "        <footer class=\"footer py-4  \">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-lg-between\">
                    <div class=\"col-lg-6 mb-lg-0 mb-4\">
                        <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class=\"fa fa-heart\"></i> by
                            <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold\" target=\"_blank\">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 320
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 321
        echo "
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/assets/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 326,  600 => 325,  596 => 324,  592 => 323,  588 => 322,  585 => 321,  575 => 320,  532 => 285,  522 => 284,  509 => 278,  499 => 277,  379 => 165,  369 => 164,  315 => 118,  304 => 110,  292 => 101,  281 => 93,  269 => 84,  257 => 75,  253 => 74,  243 => 67,  231 => 58,  220 => 50,  209 => 42,  198 => 34,  192 => 30,  182 => 29,  169 => 20,  165 => 19,  161 => 18,  157 => 17,  153 => 16,  147 => 14,  137 => 13,  118 => 5,  106 => 330,  104 => 320,  101 => 319,  99 => 284,  95 => 282,  93 => 277,  90 => 276,  88 => 164,  84 => 162,  82 => 29,  74 => 23,  71 => 13,  66 => 9,  62 => 8,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!  {% endblock %} </title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('BackOffice/assets/img/apple-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('BackOffice/assets/img/favicon.png') }}\">

        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700') }}\" />

            <link href=\"{{ asset('BackOffice/assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('BackOffice/assets/css/nucleo-svg.css') }}\" rel=\"stylesheet\" />
            <link href=\"{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons+Round') }}\" rel=\"stylesheet\">
            <link id=\"pagestyle\" href=\"{{ asset('BackOffice/assets/css/material-dashboard.css?v=3.0.2') }}\" rel=\"stylesheet\" />
           <script src=\"{{ asset('https://kit.fontawesome.com/42d5adcbca.js') }}\" crossorigin=\"anonymous\"></script>

        {% endblock %}



    </head>
    <body class=\"g-sidenav-show  bg-gray-200\">

    {% block sidebar %}
        <aside class=\"sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark\" id=\"sidenav-main\">
            <div class=\"sidenav-header\">
                <i class=\"fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
                <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/material-dashboard/pages/dashboard \" target=\"_blank\">
                    <img src=\"{{ asset('BackOffice/assets/img/logo-ct.png') }}\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
                    <span class=\"ms-1 font-weight-bold text-white\">Dashboard</span>
                </a>
            </div>
            <hr class=\"horizontal light mt-0 mb-2\">
            <div class=\"collapse navbar-collapse  w-auto  max-height-vh-100\" id=\"sidenav-collapse-main\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white active bg-gradient-primary\" href=\"{{ path('app_front') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\"></i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Front</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"{{ path('user') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">table_view</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">User</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white\" href=\"{{ path('evenement') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">receipt_long</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Evenement</span>
                        </a>
                    </li>
                      <ul>
                <li class=\"nav-item\">
                    <a class=\"nav-link text-white \" href=\"{{ path('display_arb') }}\">
                        <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"fas fa-basketball-ball\"></i>
                        </div>

                        <span class=\"nav-link-text ms-1\">Match</span>

                        <a class=\"text-red text-center\" href=\"{{ path('display_arb') }}\">Arbitre</a> <br>
                        <a href=\"{{ path('display_match') }}\">Foot</a>




                    </a>
                </li>
            </ul>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"{{ path('terrain') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Terrain</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"{{ path('display_club') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">format_textdirection_r_to_l</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Club</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white active bg-gradient-primary\" href=\"{{ path('chary_index') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">receipt_long</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Statistque club</span>
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"{{ path('display_CategorieStock') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">notifications</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Categorie Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"{{ path('stock_list') }}\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">notifications</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Stock</span>
                        </a>
                    </li>
                    <li class=\"nav-item mt-3\">
                        <h6 class=\"ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8\">Account pages</h6>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/profile.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">person</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Profile</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/sign-in.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">login</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Sign In</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-white \" href=\"./pages/sign-up.html\">
                            <div class=\"text-white text-center me-2 d-flex align-items-center justify-content-center\">
                                <i class=\"material-icons opacity-10\">assignment</i>
                            </div>
                            <span class=\"nav-link-text ms-1\">Sign Up</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"sidenav-footer position-absolute w-100 bottom-0 \">
                <div class=\"mx-3\">
                    <a class=\"btn bg-gradient-primary mt-4 w-100\" href=\"https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
                </div>
            </div>
        </aside>

    {% endblock %}
    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">
        <!-- Navbar -->
        {% block header %}
        <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" navbar-scroll=\"true\">
            <div class=\"container-fluid py-1 px-3\">
                <nav aria-label=\"breadcrumb\">

                </nav>
                <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group input-group-outline\">
                            <label class=\"form-label\">Type here...</label>
                            <input type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <ul class=\"navbar-nav  justify-content-end\">
                        <li class=\"nav-item d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body font-weight-bold px-0\">
                                <i class=\"fa fa-user me-sm-1\"></i>
                                <span class=\"d-sm-inline d-none\">Sign In</span>
                            </a>
                        </li>
                        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"iconNavbarSidenav\">
                                <div class=\"sidenav-toggler-inner\">
                                    <i class=\"sidenav-toggler-line\"></i>
                                    <i class=\"sidenav-toggler-line\"></i>
                                    <i class=\"sidenav-toggler-line\"></i>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item px-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\">
                                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-body p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell cursor-pointer\"></i>
                            </a>
                            <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"./assets/img/team-2.jpg\" class=\"avatar avatar-sm  me-3 \">
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New message</span> from Laur
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"./assets/img/small-logos/logo-spotify.svg\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New album</span> by Travis Scott
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                                    <title>credit-card</title>
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                            <g transform=\"translate(1716.000000, 291.000000)\">
                                                                <g transform=\"translate(453.000000, 454.000000)\">
                                                                    <path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
                                                                    <path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    Payment successfully completed
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {% endblock %}
        <div class=\"container-fluid py-4\">
            {% block body %}



            {% endblock %}
        </div>

        {% block footer %}
        <footer class=\"footer py-4  \">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center justify-content-lg-between\">
                    <div class=\"col-lg-6 mb-lg-0 mb-4\">
                        <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class=\"fa fa-heart\"></i> by
                            <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold\" target=\"_blank\">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        {% endblock %}
    </main>
    {% block javascripts %}

        <script src=\"{{ asset('BackOffice/assets/js/core/popper.min.js') }}\"></script>
        <script src=\"{{ asset('BackOffice/assets/js/core/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('BackOffice/assets/js/plugins/perfect-scrollbar.min.js') }}\"></script>
        <script src=\"{{ asset('BackOffice/assets/js/plugins/smooth-scrollbar.min.js') }}\"></script>
        <script src=\"{{ asset('BackOffice/assets/js/plugins/chartjs.min.js') }}\"></script>


    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\base.html.twig");
    }
}
