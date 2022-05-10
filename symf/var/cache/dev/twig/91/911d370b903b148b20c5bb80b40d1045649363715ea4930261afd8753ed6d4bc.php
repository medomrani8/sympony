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

/* categorie_stock/index.html.twig */
class __TwigTemplate_c0766df71292bfa3ac7be19932d3b43dd90e373decbccc4eab9507eaa6fa04b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_stock/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie_stock/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

";
        // line 36
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <h6 class=\"text-white text-capitalize ps-3\">Categorie Stock</h6>
                        <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_stock");
        echo "\">Ajouter Categorie Stock</a></span>

                    </div>
                </div>
                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idcat</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nom</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 58
            echo "                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "idcat", [], "any", false, false, false, 62), "html", null, true);
            echo "</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stock"], "nom", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
                                    </div>
                    </div>
                                </td>


                                <td class=\"align-middle\">
                                    <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_categoriestock", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "idcat", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                    <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCategorieStock", ["id" => twig_get_attribute($this->env, $this->source, $context["stock"], "idcat", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                            </tbody>
                        </table>
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
        return "categorie_stock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 81,  132 => 77,  128 => 76,  118 => 69,  108 => 62,  102 => 58,  98 => 57,  80 => 42,  72 => 36,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


{#
    <div class=\"example-wrapper\">
        <table>
            <thead>
            <th>idcat</th>
            <th>nom</th>

            <th>Supprimer</th>
            <th>Modifier</th>
            </thead>
            <tbody>
            {% for stock in b  %}
                <tr>
                    <td>{{stock.idcat}}</td>
                    <td>{{stock.nom}}</td>

                    <td>
                        <a href=\"{{ path('supp_categoriestock',{'id':stock.idcat}) }}\">Supprimer</a>
                    </td>
                    <td>
                        <a href=\"{{ path('modifierCategorieStock',{'id':stock.idcat}) }}\">Modifier</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

#}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card my-4\">
                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <h6 class=\"text-white text-capitalize ps-3\">Categorie Stock</h6>
                        <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('app_categorie_stock') }}\">Ajouter Categorie Stock</a></span>

                    </div>
                </div>
                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idcat</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nom</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for stock in b  %}
                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">{{stock.idcat}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                    <div class=\"d-flex flex-column justify-content-center\">
                                    <p class=\"text-xs font-weight-bold mb-0\">{{stock.nom}}</p>
                                    </div>
                    </div>
                                </td>


                                <td class=\"align-middle\">
                                    <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"{{ path('supp_categoriestock',{'id':stock.idcat}) }}\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                    <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('modifierCategorieStock',{'id':stock.idcat}) }}\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                </td>
                            </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "categorie_stock/index.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\categorie_stock\\index.html.twig");
    }
}
