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

/* arbitre_match/list.html.twig */
class __TwigTemplate_122d8a50b5e4321645076fd58be2d66504bfbb1071d7cbc0b571c990582ab3e3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbitre_match/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbitre_match/list.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #0f5132;
            }
        </style>
    </head>
    <body>

    <div class=\"row\">

        <div class=\"column\">
            <img src=\"";
        // line 25
        echo "assetClient/images/ss.jpg";
        echo "\" height=\"200\" width=\"700\">
        </div>
        <center><p><h1>Arbitre List</h1></p>
        </center>
    </div>


    <table>
        <thead>
        <th>Id Arbitre</th>
        <th>Nom Match</th>
        <th>specialite</th>
        <th>email</th>


        </thead>

        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arbitre"]) {
            // line 43
            echo "
            <tr>
                <!-- Offre Provider -->
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre"], "idarb", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>

                <!-- Title -->
                <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre"], "nomarb", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>


                <!-- Description-->
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre"], "specialite", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>

                <!-- Image-->

                <!-- Category -->
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </table>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "arbitre_match/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  149 => 63,  138 => 58,  130 => 53,  123 => 49,  117 => 46,  112 => 43,  108 => 42,  88 => 25,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #0f5132;
            }
        </style>
    </head>
    <body>

    <div class=\"row\">

        <div class=\"column\">
            <img src=\"{{ ('assetClient/images/ss.jpg') }}\" height=\"200\" width=\"700\">
        </div>
        <center><p><h1>Arbitre List</h1></p>
        </center>
    </div>


    <table>
        <thead>
        <th>Id Arbitre</th>
        <th>Nom Match</th>
        <th>specialite</th>
        <th>email</th>


        </thead>

        {% for arbitre in b  %}

            <tr>
                <!-- Offre Provider -->
                <td>{{arbitre.idarb}}</td>

                <!-- Title -->
                <td>{{arbitre.nomarb}}</td>


                <!-- Description-->
                <td>{{arbitre.specialite}}</td>

                <!-- Image-->

                <!-- Category -->
                <td>{{arbitre.email}}</td>


            </tr>
        {% endfor %}
    </table>

    </body>

{% endblock %}
", "arbitre_match/list.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\arbitre_match\\list.html.twig");
    }
}
