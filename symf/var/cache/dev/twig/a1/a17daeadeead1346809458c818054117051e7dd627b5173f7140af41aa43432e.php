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

/* front/frontaffichematch.html.twig */
class __TwigTemplate_f12be456a0d80827d996824ce7dd3aa2aca75ac8a872c32b8f62cc6dcfe8cded extends Template
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
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/frontaffichematch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/frontaffichematch.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "front/frontaffichematch.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<section class=\"bet-this-game\">
    <div class=\"overlay pt-120 pb-120\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"section-header text-center\">

                        <h2 class=\"title\">LISTE DES MATCH</h2>

                    </div>
                </div>
            </div>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["foot"]) {
            // line 18
            echo "                <div class=\"row cus-mar\">
                <div class=\"col-sm-6\">
                    <div class=\"single-area\">
                        <div class=\"head-area d-flex align-items-center bottom-item\">

                            <span>Match</span>
                            <td>
                                <a class=\"cmn-btn draw\" href=\"\">Reserver</a>
                            </td>
                        </div>
                        <div class=\"main-content\">
                            <div class=\"team-single\">

                                <div class=\"img-area\">
                                    <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/images/t11.jpg"), "html", null, true);
            echo "\">

                                </div>
                                <div class=\"card-body\">

                                    <p class=\"card-text\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foot"], "idmatchh", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foot"], "typematchh", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foot"], "datematchh", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["foot"], "idarb", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </div>


";
        // line 60
        echo "
";
        // line 63
        echo "
";
        // line 65
        echo "
";
        // line 71
        echo "
";
        // line 75
        echo "        </div>
    </div>
        </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/frontaffichematch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 75,  155 => 71,  152 => 65,  149 => 63,  146 => 60,  140 => 50,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  104 => 32,  88 => 18,  84 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block body  %}


<section class=\"bet-this-game\">
    <div class=\"overlay pt-120 pb-120\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-8\">
                    <div class=\"section-header text-center\">

                        <h2 class=\"title\">LISTE DES MATCH</h2>

                    </div>
                </div>
            </div>
            {% for foot in b %}
                <div class=\"row cus-mar\">
                <div class=\"col-sm-6\">
                    <div class=\"single-area\">
                        <div class=\"head-area d-flex align-items-center bottom-item\">

                            <span>Match</span>
                            <td>
                                <a class=\"cmn-btn draw\" href=\"\">Reserver</a>
                            </td>
                        </div>
                        <div class=\"main-content\">
                            <div class=\"team-single\">

                                <div class=\"img-area\">
                                    <img src=\"{{ asset('FrontOffice/assets/images/t11.jpg') }}\">

                                </div>
                                <div class=\"card-body\">

                                    <p class=\"card-text\">{{foot.idmatchh}}</p>
                                    <p class=\"card-text\">{{foot.typematchh}}</p>
                                    <p class=\"card-text\">{{foot.datematchh}}</p>
                                    <p class=\"card-text\">{{foot.idarb}}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>


{#    {% for terrain in b  %}#}
{#    <div class=\"row\">#}
{#        <div class=\"col-sm-6\">#}
{#            <div class=\"card\">#}
{#                <div class=\"img-area\">#}
{#                    <img src=\"{{ asset('FrontOffice/assets/images/t11.jpg') }}\">#}

{#                </div>#}
{#                <div class=\"card-body\">#}

{#                    <p class=\"card-text\">{{ terrain.idTerrain }}</p>#}

{#                    <p class=\"card-text\"> {{ terrain.typeTerrain }}</p>#}
{#                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}

{#    </div>#}
{#    </div>#}
{#        </div>#}
        </div>
    </div>
        </section>

{% endblock %}
", "front/frontaffichematch.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\front\\frontaffichematch.html.twig");
    }
}
