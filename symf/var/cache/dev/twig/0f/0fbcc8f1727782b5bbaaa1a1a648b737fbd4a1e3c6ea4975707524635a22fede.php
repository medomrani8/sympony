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

/* baseFront.html.twig */
class __TwigTemplate_3fd53ddcb863c21a6803f460ec155616dc3b1bc86e57982a05a6e12887a27090 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">


<!-- Mirrored from pixner.net/bitbetio/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 21:17:05 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Bitbetio - HTML Template</title>

    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/images/fav.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/fontawesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/plugin/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/plugin/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/plugin/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/arafat-font.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/plugin/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/css/style.css"), "html", null, true);
        echo "\">
</head>

<body>
<!-- start preloader -->
<div class=\"preloader\" id=\"preloader\"></div>
<!-- end preloader -->

<!-- Scroll To Top Start-->
<a href=\"javascript:void(0)\" class=\"scrollToTop\"><i class=\"fas fa-angle-double-up\"></i></a>
<!-- Scroll To Top End -->

<!-- header-section start -->
<header class=\"header-section\">
    <div class=\"overlay\">
        <div class=\"container\">
            <div class=\"row d-flex header-area\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/images/logo.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"logo\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav mr-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Home</a>
                            </li>
                            <li class=\"nav-item dropdown main-navbar\">

                                <a   href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backkkkk");
        echo "\">Dashboard</a>

                            </li>

                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Evenement</a>

                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Terrain</a>
                                <ul class=\"dropdown-menu main-menu shadow\">
";
        // line 69
        echo "                                </ul>
                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_client");
        echo "\"
                                   >Stock & Club</a>

                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Match</a>
                                <ul class=\"dropdown-menu main-menu shadow\">
                         <li><a class=\"nav-link\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match");
        echo "\">Foot</a></li>
                         ";
        // line 82
        echo "                                </ul>
                            </li>





                        </ul>
                        <div class=\"right-area header-action d-flex align-items-center max-un\">
                            <button type=\"button\" class=\"login\" data-bs-toggle=\"modal\" data-bs-target=\"#loginMod\">
                                Login
                            </button>
                            <button type=\"button\" class=\"cmn-btn reg\" data-bs-toggle=\"modal\" data-bs-target=\"#loginMod\">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header-section end -->

<!-- Login Registration start -->
<div class=\"log-reg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"modal fade\" id=\"loginMod\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header justify-content-center\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                        aria-label=\"Close\"></button>
                            </div>
                            <ul class=\"nav log-reg-btn justify-content-around\">
                                <li class=\"bottom-area\" role=\"presentation\">
                                    <button class=\"nav-link\" id=\"regArea-tab\" data-bs-toggle=\"tab\"
                                            data-bs-target=\"#regArea\" type=\"button\" role=\"tab\" aria-controls=\"regArea\"
                                            aria-selected=\"false\">
                                        SIGN UP
                                    </button>
                                </li>
                                <li class=\"bottom-area\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"loginArea-tab\" data-bs-toggle=\"tab\"
                                            data-bs-target=\"#loginArea\" type=\"button\" role=\"tab\"
                                            aria-controls=\"loginArea\" aria-selected=\"true\">
                                        LOGIN
                                    </button>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"loginArea\" role=\"tabpanel\"
                                     aria-labelledby=\"loginArea-tab\">
                                    <div class=\"login-reg-content\">
                                        <div class=\"modal-body\">
                                            <div class=\"head-area\">
                                                <h6 class=\"title\">Login Direetly With</h6>
                                                <div class=\"social-link d-flex align-items-center\">
                                                    <a href=\"javascript:void(0)\" class=\"active\"><i
                                                                class=\"fab fa-facebook-f\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-linkedin-in\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-instagram\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"form-area\">
                                                <form action=\"#\">
                                                    <div class=\"row\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"logemail\">Email</label>
                                                                <input type=\"text\" id=\"logemail\"
                                                                       placeholder=\"Email Address\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"logpassword\">Password</label>
                                                                <input type=\"text\" id=\"logpassword\"
                                                                       placeholder=\"Email Password\">
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <div class=\"remember-me\">
                                                                <label
                                                                        class=\"checkbox-single d-flex align-items-center\">
                                                                        <span class=\"left-area\">
                                                                            <span class=\"checkbox-area d-flex\">
                                                                                <input type=\"checkbox\"
                                                                                       checked=\"checked\">
                                                                                <span class=\"checkmark\"></span>
                                                                            </span>
                                                                            <span
                                                                                    class=\"item-title d-flex align-items-center\">
                                                                                <span>Remember Me</span>
                                                                            </span>
                                                                        </span>
                                                                </label>
                                                                <a href=\"javascript:void(0)\">Forgot Password</a>
                                                            </div>
                                                        </div>
                                                        <span class=\"btn-border w-100\">
                                                                <button class=\"cmn-btn w-100\">LOGIN</button>
                                                            </span>
                                                    </div>
                                                </form>
                                                <div class=\"bottom-area text-center\">
                                                    <p>Not a member ? <a href=\"javascript:void(0)\" class=\"reg-btn\">Register</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"regArea\" role=\"tabpanel\"
                                     aria-labelledby=\"regArea-tab\">
                                    <div class=\"login-reg-content regMode\">
                                        <div class=\"modal-body\">
                                            <div class=\"head-area\">
                                                <h6 class=\"title\">Register On Bitbetio</h6>
                                                <div class=\"social-link d-flex align-items-center\">
                                                    <a href=\"javascript:void(0)\" class=\"active\"><i
                                                                class=\"fab fa-facebook-f\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-linkedin-in\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-instagram\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"form-area\">
                                                <form action=\"#\">
                                                    <div class=\"row\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"regemail\">Email</label>
                                                                <input type=\"text\" id=\"regemail\"
                                                                       placeholder=\"Email Address\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"regpassword\">Password</label>
                                                                <input type=\"text\" id=\"regpassword\"
                                                                       placeholder=\"Email Password\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label>Country</label>
                                                                <select>
                                                                    <option value=\"1\">United States</option>
                                                                    <option value=\"2\">United Kingdom</option>
                                                                    <option value=\"3\">Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <div class=\"remember-me\">
                                                                <a href=\"javascript:void(0)\">Have a referral
                                                                    code?</a>
                                                            </div>
                                                        </div>
                                                        <span class=\"btn-border w-100\">
                                                                <button class=\"cmn-btn w-100\">SIGN UP</button>
                                                            </span>
                                                    </div>
                                                </form>
                                                <div class=\"bottom-area text-center\">
                                                    <p>Already have an member ? <a href=\"javascript:void(0)\"
                                                                                   class=\"log-btn\">Login</a></p>
                                                </div>
                                                <div class=\"counter-area\">
                                                    <div class=\"single\">

                                                        <div class=\"text-area\">
                                                            <p>25,179k</p>
                                                            <p class=\"mdr\">Bets</p>
                                                        </div>
                                                    </div>

                                                        <div class=\"text-area\">
                                                            <p>6.65 BTC</p>
                                                            <p class=\"mdr\">Total Won</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration end -->

";
        // line 280
        $this->displayBlock('body', $context, $blocks);
        // line 282
        echo "

<!-- Footer Area Start -->
<footer class=\"footer-section\">
    <div class=\"container pt-120\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"newsletter\">
                    <div class=\"section-text text-center\">
                        <h5 class=\"sub-title\">Subscribe Us</h5>
                        <h3 class=\"title\">For Newsletter</h3>
                        <p>Subscribe to our newsletter to receive all the latest news and updates</p>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"footer-bottom-area pt-120\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"menu-item\">

                        <ul class=\"footer-link\">
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"terms-conditions.html\">Terms of Services</a></li>
                            <li><a href=\"privacy-policy.html\">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"copyright\">
                        <div class=\"copy-area\">
                            <p> Copyright © <a href=\"index.html\">Bitbetio</a> | Designed by
                                <a href=\"https://themeforest.net/user/pixelaxis\" class=\"auth\">Pixelaxis</a>
                            </p>
                        </div>
                        <div class=\"social-link d-flex align-items-center\">
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!--==================================================================-->
<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/fontawesome.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/slick.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/jquery.downCount.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/counter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/waypoint.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/plugin/plugin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>
</body>


<!-- Mirrored from pixner.net/bitbetio/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 21:17:16 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 280
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 280,  474 => 345,  470 => 344,  466 => 343,  462 => 342,  458 => 341,  454 => 340,  450 => 339,  446 => 338,  442 => 337,  438 => 336,  434 => 335,  430 => 334,  426 => 333,  373 => 282,  371 => 280,  171 => 82,  167 => 80,  156 => 72,  151 => 69,  135 => 54,  128 => 50,  116 => 41,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">


<!-- Mirrored from pixner.net/bitbetio/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 21:17:05 GMT -->
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Bitbetio - HTML Template</title>

    <link rel=\"shortcut icon\" href=\"{{ asset('FrontOffice/assets/images/fav.png') }}\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/fontawesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/plugin/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/plugin/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/plugin/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/arafat-font.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/plugin/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('FrontOffice/assets/css/style.css') }}\">
</head>

<body>
<!-- start preloader -->
<div class=\"preloader\" id=\"preloader\"></div>
<!-- end preloader -->

<!-- Scroll To Top Start-->
<a href=\"javascript:void(0)\" class=\"scrollToTop\"><i class=\"fas fa-angle-double-up\"></i></a>
<!-- Scroll To Top End -->

<!-- header-section start -->
<header class=\"header-section\">
    <div class=\"overlay\">
        <div class=\"container\">
            <div class=\"row d-flex header-area\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"navbar-brand\" href=\"#\">
                        <img src=\"{{ asset('FrontOffice/assets/images/logo.png') }}\" class=\"logo\" alt=\"logo\">
                    </a>
                    <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                            data-bs-target=\"#navbar-content\">
                        <i class=\"fas fa-bars\"></i>
                    </button>
                    <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-content\">
                        <ul class=\"navbar-nav mr-auto mb-2 mb-lg-0\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_front') }}\">Home</a>
                            </li>
                            <li class=\"nav-item dropdown main-navbar\">

                                <a   href=\"{{ path('app_backkkkk') }}\">Dashboard</a>

                            </li>

                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Evenement</a>

                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Terrain</a>
                                <ul class=\"dropdown-menu main-menu shadow\">
{#                                    <li><a class=\"nav-link\" href=\"{{ path('frontterrain') }}\">Terrain</a></li>#}
{#                                    <li><a class=\"nav-link\" href=\"{{ path('affichert') }}\">Personnel Terrain</a></li>#}
                                </ul>
                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"{{ path('home_client') }}\"
                                   >Stock & Club</a>

                            </li>
                            <li class=\"nav-item dropdown main-navbar\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\"
                                   data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">Match</a>
                                <ul class=\"dropdown-menu main-menu shadow\">
                         <li><a class=\"nav-link\" href=\"{{ path('match') }}\">Foot</a></li>
                         {#      <li><a class=\"nav-link\" href=\"{{ path('affichert') }}\">Personnel Terrain</a></li>#}
                                </ul>
                            </li>





                        </ul>
                        <div class=\"right-area header-action d-flex align-items-center max-un\">
                            <button type=\"button\" class=\"login\" data-bs-toggle=\"modal\" data-bs-target=\"#loginMod\">
                                Login
                            </button>
                            <button type=\"button\" class=\"cmn-btn reg\" data-bs-toggle=\"modal\" data-bs-target=\"#loginMod\">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- header-section end -->

<!-- Login Registration start -->
<div class=\"log-reg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"modal fade\" id=\"loginMod\">
                    <div class=\"modal-dialog modal-dialog-centered\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header justify-content-center\">
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                        aria-label=\"Close\"></button>
                            </div>
                            <ul class=\"nav log-reg-btn justify-content-around\">
                                <li class=\"bottom-area\" role=\"presentation\">
                                    <button class=\"nav-link\" id=\"regArea-tab\" data-bs-toggle=\"tab\"
                                            data-bs-target=\"#regArea\" type=\"button\" role=\"tab\" aria-controls=\"regArea\"
                                            aria-selected=\"false\">
                                        SIGN UP
                                    </button>
                                </li>
                                <li class=\"bottom-area\" role=\"presentation\">
                                    <button class=\"nav-link active\" id=\"loginArea-tab\" data-bs-toggle=\"tab\"
                                            data-bs-target=\"#loginArea\" type=\"button\" role=\"tab\"
                                            aria-controls=\"loginArea\" aria-selected=\"true\">
                                        LOGIN
                                    </button>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade show active\" id=\"loginArea\" role=\"tabpanel\"
                                     aria-labelledby=\"loginArea-tab\">
                                    <div class=\"login-reg-content\">
                                        <div class=\"modal-body\">
                                            <div class=\"head-area\">
                                                <h6 class=\"title\">Login Direetly With</h6>
                                                <div class=\"social-link d-flex align-items-center\">
                                                    <a href=\"javascript:void(0)\" class=\"active\"><i
                                                                class=\"fab fa-facebook-f\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-linkedin-in\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-instagram\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"form-area\">
                                                <form action=\"#\">
                                                    <div class=\"row\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"logemail\">Email</label>
                                                                <input type=\"text\" id=\"logemail\"
                                                                       placeholder=\"Email Address\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"logpassword\">Password</label>
                                                                <input type=\"text\" id=\"logpassword\"
                                                                       placeholder=\"Email Password\">
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <div class=\"remember-me\">
                                                                <label
                                                                        class=\"checkbox-single d-flex align-items-center\">
                                                                        <span class=\"left-area\">
                                                                            <span class=\"checkbox-area d-flex\">
                                                                                <input type=\"checkbox\"
                                                                                       checked=\"checked\">
                                                                                <span class=\"checkmark\"></span>
                                                                            </span>
                                                                            <span
                                                                                    class=\"item-title d-flex align-items-center\">
                                                                                <span>Remember Me</span>
                                                                            </span>
                                                                        </span>
                                                                </label>
                                                                <a href=\"javascript:void(0)\">Forgot Password</a>
                                                            </div>
                                                        </div>
                                                        <span class=\"btn-border w-100\">
                                                                <button class=\"cmn-btn w-100\">LOGIN</button>
                                                            </span>
                                                    </div>
                                                </form>
                                                <div class=\"bottom-area text-center\">
                                                    <p>Not a member ? <a href=\"javascript:void(0)\" class=\"reg-btn\">Register</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane fade\" id=\"regArea\" role=\"tabpanel\"
                                     aria-labelledby=\"regArea-tab\">
                                    <div class=\"login-reg-content regMode\">
                                        <div class=\"modal-body\">
                                            <div class=\"head-area\">
                                                <h6 class=\"title\">Register On Bitbetio</h6>
                                                <div class=\"social-link d-flex align-items-center\">
                                                    <a href=\"javascript:void(0)\" class=\"active\"><i
                                                                class=\"fab fa-facebook-f\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-linkedin-in\"></i></a>
                                                    <a href=\"javascript:void(0)\"><i
                                                                class=\"fab fa-instagram\"></i></a>
                                                </div>
                                            </div>
                                            <div class=\"form-area\">
                                                <form action=\"#\">
                                                    <div class=\"row\">
                                                        <div class=\"col-12\">
                                                            <div class=\"single-input\">
                                                                <label for=\"regemail\">Email</label>
                                                                <input type=\"text\" id=\"regemail\"
                                                                       placeholder=\"Email Address\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label for=\"regpassword\">Password</label>
                                                                <input type=\"text\" id=\"regpassword\"
                                                                       placeholder=\"Email Password\">
                                                            </div>
                                                            <div class=\"single-input\">
                                                                <label>Country</label>
                                                                <select>
                                                                    <option value=\"1\">United States</option>
                                                                    <option value=\"2\">United Kingdom</option>
                                                                    <option value=\"3\">Canada</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"col-12\">
                                                            <div class=\"remember-me\">
                                                                <a href=\"javascript:void(0)\">Have a referral
                                                                    code?</a>
                                                            </div>
                                                        </div>
                                                        <span class=\"btn-border w-100\">
                                                                <button class=\"cmn-btn w-100\">SIGN UP</button>
                                                            </span>
                                                    </div>
                                                </form>
                                                <div class=\"bottom-area text-center\">
                                                    <p>Already have an member ? <a href=\"javascript:void(0)\"
                                                                                   class=\"log-btn\">Login</a></p>
                                                </div>
                                                <div class=\"counter-area\">
                                                    <div class=\"single\">

                                                        <div class=\"text-area\">
                                                            <p>25,179k</p>
                                                            <p class=\"mdr\">Bets</p>
                                                        </div>
                                                    </div>

                                                        <div class=\"text-area\">
                                                            <p>6.65 BTC</p>
                                                            <p class=\"mdr\">Total Won</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Registration end -->

{% block body  %}
{% endblock %}


<!-- Footer Area Start -->
<footer class=\"footer-section\">
    <div class=\"container pt-120\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-10\">
                <div class=\"newsletter\">
                    <div class=\"section-text text-center\">
                        <h5 class=\"sub-title\">Subscribe Us</h5>
                        <h3 class=\"title\">For Newsletter</h3>
                        <p>Subscribe to our newsletter to receive all the latest news and updates</p>
                    </div>

                </div>
            </div>
        </div>
        <div class=\"footer-bottom-area pt-120\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"menu-item\">

                        <ul class=\"footer-link\">
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"terms-conditions.html\">Terms of Services</a></li>
                            <li><a href=\"privacy-policy.html\">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-12\">
                    <div class=\"copyright\">
                        <div class=\"copy-area\">
                            <p> Copyright © <a href=\"index.html\">Bitbetio</a> | Designed by
                                <a href=\"https://themeforest.net/user/pixelaxis\" class=\"auth\">Pixelaxis</a>
                            </p>
                        </div>
                        <div class=\"social-link d-flex align-items-center\">
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin-in\"></i></a>
                            <a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!--==================================================================-->
<script src=\"{{ asset('FrontOffice/assets/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/jquery-ui.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/fontawesome.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/slick.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/jquery.downCount.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/counter.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/waypoint.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/wow.min.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/plugin/plugin.js') }}\"></script>
<script src=\"{{ asset('FrontOffice/assets/js/main.js') }}\"></script>
</body>


<!-- Mirrored from pixner.net/bitbetio/main/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 21:17:16 GMT -->
</html>", "baseFront.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\baseFront.html.twig");
    }
}
