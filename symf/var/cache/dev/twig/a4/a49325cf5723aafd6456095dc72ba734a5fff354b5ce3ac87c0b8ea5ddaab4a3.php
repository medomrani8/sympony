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

/* categorie_club/index.html.twig */
class __TwigTemplate_6a6026350cfd63b8b3011c2d821a4dcbd1dcf0dad2f0f007a7f6021ca3345bc8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_club/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie_club/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card my-4\">
            <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                    <h6 class=\"text-white text-capitalize ps-3\">Categorie Club Table</h6>
                    <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie_club");
        echo "\">Ajouter Categorie</a></span>
                    <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_club");
        echo "\">Table Club</a></span>
                </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
                <div class=\"table-responsive p-0\">
                    <table class=\"table align-items-center mb-0\">
                        <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idcategorie</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nomentreneur</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">activite</th>

                            <th class=\"text-secondary opacity-7\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorieclub"]) {
            // line 30
            echo "                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorieclub"], "idcategorie", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorieclub"], "nomentreneur", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorieclub"], "activite", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorieclub"], "idClub", [], "any", false, false, false, 57), "categorie", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </td>




                                <td class=\"align-middle\">
                                    <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppp", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieclub"], "idcategorie", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                    <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCategorieClub", ["id" => twig_get_attribute($this->env, $this->source, $context["categorieclub"], "idcategorie", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorieclub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </tbody>
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
        return "categorie_club/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 71,  157 => 67,  153 => 66,  141 => 57,  130 => 49,  119 => 41,  109 => 34,  103 => 30,  99 => 29,  80 => 13,  76 => 12,  68 => 6,  58 => 5,  35 => 1,);
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
                    <h6 class=\"text-white text-capitalize ps-3\">Categorie Club Table</h6>
                    <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('addCategorie_club') }}\">Ajouter Categorie</a></span>
                    <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('display_club') }}\">Table Club</a></span>
                </div>
            </div>
            <div class=\"card-body px-0 pb-2\">
                <div class=\"table-responsive p-0\">
                    <table class=\"table align-items-center mb-0\">
                        <thead>
                        <tr>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idcategorie</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">nomentreneur</th>
                            <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">activite</th>

                            <th class=\"text-secondary opacity-7\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for categorieclub in b  %}
                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">{{categorieclub.idcategorie}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">{{categorieclub.nomentreneur}}</p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">{{categorieclub.activite}}</p>
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class=\"d-flex px-2 py-1\">
                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <p class=\"text-xs font-weight-bold mb-0\">{{categorieclub.idClub.categorie}}</p>
                                        </div>
                                    </div>
                                </td>




                                <td class=\"align-middle\">
                                    <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"{{ path('suppp',{'id':categorieclub.idcategorie}) }}\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                    <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('modifierCategorieClub',{'id':categorieclub.idcategorie}) }}\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
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
", "categorie_club/index.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\categorie_club\\index.html.twig");
    }
}
