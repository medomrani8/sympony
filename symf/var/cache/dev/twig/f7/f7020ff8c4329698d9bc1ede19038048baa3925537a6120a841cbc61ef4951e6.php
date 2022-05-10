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

/* stock/index.html.twig */
class __TwigTemplate_ddcc91876746a3fd7792f9c51d9a025c9137fd84f9a0651fe7020f964fd053b7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/index.html.twig", 1);
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



    <div class=\"row\">
    <div class=\"col-12\">
    <div class=\"card my-4\">
        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\"> Stock</h6>
                <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_CategorieStock");
        echo "\"> Categorie Stock</a></span>
                <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
        echo "\"> ajouter Stock</a></span>

            </div>
        </div>



                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"\">nom</th>
                                <th class=\"\">prix</th>
                                <th class=\"\">quantite</th>
                                <th class=\"\">categorie</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stocks"]) || array_key_exists("stocks", $context) ? $context["stocks"] : (function () { throw new RuntimeError('Variable "stocks" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 37
            echo "                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "prix", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "quantite", [], "any", false, false, false, 56), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>
";
            // line 67
            echo "                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "category", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                    </td>


                                    <td class=\"\">


                                        <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idpro", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idpro", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail_stock", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "idpro", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">info</i>detail</a>
                                    </td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
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
        return "stock/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 89,  173 => 84,  169 => 83,  165 => 82,  150 => 70,  145 => 67,  138 => 56,  127 => 48,  117 => 41,  111 => 37,  107 => 36,  84 => 16,  80 => 15,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}




    <div class=\"row\">
    <div class=\"col-12\">
    <div class=\"card my-4\">
        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                <h6 class=\"text-white text-capitalize ps-3\"> Stock</h6>
                <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('display_CategorieStock') }}\"> Categorie Stock</a></span>
                <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('add') }}\"> ajouter Stock</a></span>

            </div>
        </div>



                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"\">nom</th>
                                <th class=\"\">prix</th>
                                <th class=\"\">quantite</th>
                                <th class=\"\">categorie</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for s in stocks  %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">{{s.nom}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{s.prix}}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{s.quantite}}</p>
                                            </div>
                                        </div>
                                    </td>
{#                                    <td>#}
{#                                        <div class=\"d-flex px-2 py-1\">#}
{#                                            <div class=\"d-flex flex-column justify-content-center\">#}
{#                                                <img src=\"{{ asset('uploads/stock_image/'~s.image) }}\" style=\"width: 30%;height: 30%\"/>#}
{#                                            </div>#}
{#                                        </div>#}
{#                                    </td>#}
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{s.category.nom}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>

                                    </td>


                                    <td class=\"\">


                                        <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"{{ path('suppression',{'id':s.idpro}) }}\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('modification',{'id':s.idpro}) }}\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('detail_stock',{'id':s.idpro}) }}\"><i class=\"material-icons text-sm me-2\">info</i>detail</a>
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
{% endblock %}", "stock/index.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\stock\\index.html.twig");
    }
}
