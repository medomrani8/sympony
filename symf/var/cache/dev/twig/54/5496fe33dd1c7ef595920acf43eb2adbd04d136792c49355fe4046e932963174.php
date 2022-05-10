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

/* stock/detail_stock.html.twig */
class __TwigTemplate_7e052777b27e307fe43b5f9c6640497802f66ded39af092504e595e2c1eb4ec7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/detail_stock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/detail_stock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/detail_stock.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">
            <div class=\"container-fluid\">


                <div class=\"row\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stock_list");
        echo "\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\">

                    <div class=\"col-md-6 col-lg-3\">

                        <div class=\"card m-b-20\">
                            <img class=\"card-img-top img-fluid\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/stock_image/" . (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 26, $this->source); })()))), "html", null, true);
        echo "\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"> Produit numero :";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</h4>
                                <p class=\"card-text\">Description : <span style=\"color:#ff5b5b\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</span> </p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Prix: <span style=\"color:#ff5b5b\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</span> </li>
                                <li class=\"list-group-item\">Nom : ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</li>
                                <li class=\"list-group-item\">Quantite : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new RuntimeError('Variable "quantite" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</li>
                                <li class=\"list-group-item\">Categorie : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["nameCat"]) || array_key_exists("nameCat", $context) ? $context["nameCat"] : (function () { throw new RuntimeError('Variable "nameCat" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</li>

                            </ul>
                                                        <div class=\"card-body\">
                                                            <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_pdf", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 39, $this->source); })())]), "html", null, true);
        echo "\"><i class=\"material-icons text-sm me-2\">print</i>IMPRIMER</a>
                                                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "stock/detail_stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  104 => 29,  100 => 28,  95 => 26,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">
            <div class=\"container-fluid\">


                <div class=\"row\">
                    <a href=\"{{ path('stock_list') }}\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\">

                    <div class=\"col-md-6 col-lg-3\">

                        <div class=\"card m-b-20\">
                            <img class=\"card-img-top img-fluid\" src=\"{{ asset('uploads/stock_image/'~image) }}\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\"> Produit numero :{{id }}</h4>
                                <p class=\"card-text\">Description : <span style=\"color:#ff5b5b\">{{ description }}</span> </p>
                            </div>
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">Prix: <span style=\"color:#ff5b5b\">{{ prix }}</span> </li>
                                <li class=\"list-group-item\">Nom : {{ name }}</li>
                                <li class=\"list-group-item\">Quantite : {{ quantite }}</li>
                                <li class=\"list-group-item\">Categorie : {{ nameCat }}</li>

                            </ul>
                                                        <div class=\"card-body\">
                                                            <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('article_pdf',{'id':id}) }}\"><i class=\"material-icons text-sm me-2\">print</i>IMPRIMER</a>
                                                        </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
{% endblock %}", "stock/detail_stock.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\stock\\detail_stock.html.twig");
    }
}
