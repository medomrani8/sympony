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

/* client/home_client/home.html.twig */
class __TwigTemplate_5ae14c44233e845f5ac94ae87ace040d1b4b540f946a71e6b80eec706009d2bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/home_client/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/home_client/home.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "client/home_client/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeClientController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <section class=\"bet-this-game\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CLUBS</h2>

                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\" style=\"display: flex\">

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clubs"]) {
            // line 24
            echo "


                <div class=\"card\" style=\"width: 18rem;margin: 5px\">
                    <div class=\"card-body\">
                        <span style=\"color: black\">Club ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubs"], "idClub", [], "any", false, false, false, 29), "html", null, true);
            echo "</span><br/>
                        <label style=\"color: black\">Adresse</label>
                        <h5 class=\"card-title\" style=\"color: #ff5b5b\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clubs"], "adresse", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>

                        <a class=\"btn btn-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_clubs_cat", ["id" => twig_get_attribute($this->env, $this->source, $context["clubs"], "idclub", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Club Categorie</a>

                    </div>
                </div>


                    <br/>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clubs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
                </div>

            </div>

            </div>
        </div>
    </section>


    <section class=\"breadcrumb-option spad set-bg\" data-setbg=\"img\\breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <div class=\"pagination\" >
                            ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 58, $this->source); })()));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CATEGORIES STOCKS</h2>

                        </div>
                    </div>
                </div>                    <div class=\"row justify-content-center\" style=\"display: flex\">

                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["c"]);
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 82
            echo "


                        <div class=\"card\" style=\"width: 18rem;margin: 5px\">
                            <div class=\"card-body\">
                                <span style=\"color: black\">Categorie ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "idcat", [], "any", false, false, false, 87), "html", null, true);
            echo "</span><br/>
                                <label style=\"color: black\">Nom</label>
                                <h5 class=\"card-title\" style=\"color: #ff5b5b\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nom", [], "any", false, false, false, 89), "html", null, true);
            echo "</h5>

                                <a class=\"btn btn-success\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_products", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "getIdCat", [], "method", false, false, false, 91)]), "html", null, true);
            echo "\">Stocks</a>

                            </div>
                        </div>


                    <br/>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </div>


            </div>

        </div>
        </div>
    <section class=\"breadcrumb-option spad set-bg\" data-setbg=\"img\\breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <div class=\"pagination\" >
                            ";
        // line 113
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 113, $this->source); })()));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/home_client/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 113,  223 => 100,  208 => 91,  203 => 89,  198 => 87,  191 => 82,  187 => 81,  161 => 58,  143 => 42,  128 => 33,  123 => 31,  118 => 29,  111 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Hello HomeClientController!{% endblock %}

{% block body %}



    <section class=\"bet-this-game\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CLUBS</h2>

                        </div>
                    </div>
                </div>
                <div class=\"row justify-content-center\" style=\"display: flex\">

                {% for clubs in b %}



                <div class=\"card\" style=\"width: 18rem;margin: 5px\">
                    <div class=\"card-body\">
                        <span style=\"color: black\">Club {{ clubs.idClub }}</span><br/>
                        <label style=\"color: black\">Adresse</label>
                        <h5 class=\"card-title\" style=\"color: #ff5b5b\">{{ clubs.adresse }}</h5>

                        <a class=\"btn btn-primary\" href=\"{{ path('show_clubs_cat',{'id':clubs.idclub}) }}\">Club Categorie</a>

                    </div>
                </div>


                    <br/>

                {% endfor %}

                </div>

            </div>

            </div>
        </div>
    </section>


    <section class=\"breadcrumb-option spad set-bg\" data-setbg=\"img\\breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <div class=\"pagination\" >
                            {{ knp_pagination_render(b) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CATEGORIES STOCKS</h2>

                        </div>
                    </div>
                </div>                    <div class=\"row justify-content-center\" style=\"display: flex\">

                {% for c in c %}



                        <div class=\"card\" style=\"width: 18rem;margin: 5px\">
                            <div class=\"card-body\">
                                <span style=\"color: black\">Categorie {{ c.idcat }}</span><br/>
                                <label style=\"color: black\">Nom</label>
                                <h5 class=\"card-title\" style=\"color: #ff5b5b\">{{ c.nom }}</h5>

                                <a class=\"btn btn-success\" href=\"{{  path('show_products',{'id':c.getIdCat()}) }}\">Stocks</a>

                            </div>
                        </div>


                    <br/>

                {% endfor %}
                </div>


            </div>

        </div>
        </div>
    <section class=\"breadcrumb-option spad set-bg\" data-setbg=\"img\\breadcrumb-bg.jpg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <div class=\"breadcrumb__text\">
                        <div class=\"pagination\" >
                            {{ knp_pagination_render(c) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



{% endblock %}
", "client/home_client/home.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\client\\home_client\\home.html.twig");
    }
}
