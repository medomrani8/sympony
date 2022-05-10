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

/* arbitre_match/index.html.twig */
class __TwigTemplate_9547895259642813e96ae45667c831e6c32016cf560b5dce635d90f188d7e2e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbitre_match/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arbitre_match/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arbitre_match/index.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "




     ";
        // line 13
        $this->displayBlock('contenpage', $context, $blocks);
        // line 176
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 14
        echo "<div class=\"example-wrapper\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Match</h4>
            <p class=\"card-description\"> Gestion de <code>Match</code>
            </p>
            <section class=\"s-crossfit\">
                <div class=\"container\">
                    <h2>Rechercher Arbitre !!</h2>

                    <div class=\"sidebar-search\">

                        <div class=\"input-group custom-search-form\">

                            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                        </div>
                        <!-- /input-group -->
                    </div>

                    <div class=\"row\" id=\"search\">

                    </div>
                    <br><br><br><br>
                </div>
            </section>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script
                    src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"), "html", null, true);
        echo "\">
            </script>
            <script>
                \$( document ).ready(function() {
                    var currentRequest = null;
                    \$(\"#search\").keyup(function(e){
                        /* La variable value va prendre la valeur insérer dans le champ de texte
                        afin d’effectuer la recherche */
                        var value = \$(this).val();
                        if(currentRequest != null) {
                            currentRequest.abort();
                        }
                        /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                        « search » pour faire la recherche */
                        currentRequest = \$.ajax({
                            url : \"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherchearb");
        echo "\",
                            type : 'GET',
                            data: {
                                'searchValue' : value
                            },
                            success : function(retour)
                            {
                                \$('#all').html(retour);
                            },
                        });
                        return false;
                    });
                });
            </script>






















            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "        <div class=\"alert alert-warning\">
        ";
            // line 94
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    <div style=\"display: flex;align-items:center;justify-content: center;\" xmlns=\"http://www.w3.org/1999/html\">

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card my-4\">
                    <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                        <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                            <h1 class=\"text-white text-capitalize ps-3\">Table Arbitre</h1>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Idarb</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nomarb </th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Specialite</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Email</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Supprimer</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Modifier</th>

                                    <th class=\"text-secondary opacity-7\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["arbitre_match"]) {
            echo "                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">

                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\"> ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "idarb", [], "any", false, false, false, 127), "html", null, true);
            echo "</h6>


                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "nomarb", [], "any", false, false, false, 134), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "specialite", [], "any", false, false, false, 138), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "email", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">
                                        <span class=\"badge badge-sm bg-gradient-danger\"> <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_arb", ["id" => twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "idarb", [], "any", false, false, false, 146)]), "html", null, true);
            echo "\">Supprimer</a></span>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierArb", ["id" => twig_get_attribute($this->env, $this->source, $context["arbitre_match"], "idarb", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\">Modifier</a></span>
                                    </td>

                                </tr>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arbitre_match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                </tbody>

                                <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addArb");
        echo "\">Ajouter Arbitre</a></span>
                                </br>
                            </table>
                            <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  ";
        // line 160
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 160, $this->source); })()));
        echo " </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class=\"badge badge-sm bg-gradient\"> <a href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listArb");
        echo "\">PDF</a></span>

        <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_arb");
        echo "\"><i class=\"btn btn-danger\" data-feather=\"arrow-down\"></i>ascendant specialite</a>
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
        return "arbitre_match/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 169,  309 => 167,  299 => 160,  293 => 157,  289 => 155,  277 => 149,  271 => 146,  264 => 142,  257 => 138,  250 => 134,  240 => 127,  230 => 122,  202 => 96,  194 => 94,  191 => 93,  187 => 92,  148 => 56,  130 => 41,  125 => 39,  98 => 14,  88 => 13,  78 => 176,  76 => 13,  69 => 8,  59 => 7,  36 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("



{% extends 'base.html.twig' %}

{% block body %}





     {% block contenpage %}
<div class=\"example-wrapper\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Match</h4>
            <p class=\"card-description\"> Gestion de <code>Match</code>
            </p>
            <section class=\"s-crossfit\">
                <div class=\"container\">
                    <h2>Rechercher Arbitre !!</h2>

                    <div class=\"sidebar-search\">

                        <div class=\"input-group custom-search-form\">

                            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                        </div>
                        <!-- /input-group -->
                    </div>

                    <div class=\"row\" id=\"search\">

                    </div>
                    <br><br><br><br>
                </div>
            </section>
            <script src=\"{{ asset('assets/js/jquery.js') }}\"></script>
            <script
                    src=\"{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js')}}\">
            </script>
            <script>
                \$( document ).ready(function() {
                    var currentRequest = null;
                    \$(\"#search\").keyup(function(e){
                        /* La variable value va prendre la valeur insérer dans le champ de texte
                        afin d’effectuer la recherche */
                        var value = \$(this).val();
                        if(currentRequest != null) {
                            currentRequest.abort();
                        }
                        /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                        « search » pour faire la recherche */
                        currentRequest = \$.ajax({
                            url : \"{{ path('recherchearb') }}\",
                            type : 'GET',
                            data: {
                                'searchValue' : value
                            },
                            success : function(retour)
                            {
                                \$('#all').html(retour);
                            },
                        });
                        return false;
                    });
                });
            </script>






















            {% for message in app.flashes('info') %}
        <div class=\"alert alert-warning\">
        {{message}}
    {% endfor %}
    <div style=\"display: flex;align-items:center;justify-content: center;\" xmlns=\"http://www.w3.org/1999/html\">

        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card my-4\">
                    <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                        <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                            <h1 class=\"text-white text-capitalize ps-3\">Table Arbitre</h1>
                        </div>
                    </div>
                    <div class=\"card-body px-0 pb-2\">
                        <div class=\"table-responsive p-0\">
                            <table class=\"table align-items-center mb-0\">
                                <thead>
                                <tr>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Idarb</th>
                                    <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Nomarb </th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Specialite</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Email</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Supprimer</th>
                                    <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">Modifier</th>

                                    <th class=\"text-secondary opacity-7\"></th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for arbitre_match in b %}                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">

                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\"> {{arbitre_match.idarb}}</h6>


                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{arbitre_match.nomarb}}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{arbitre_match.specialite}}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td>
                                        <p class=\"text-xs font-weight-bold mb-0\">{{arbitre_match.email}}</p>
                                        <p class=\"text-xs text-secondary mb-0\"></p>
                                    </td>
                                    <td class=\"align-middle text-center text-sm\">
                                        <span class=\"badge badge-sm bg-gradient-danger\"> <a href=\"{{ path('supp_arb', {'id': arbitre_match.idarb}) }}\">Supprimer</a></span>
                                    </td>
                                    <td class=\"align-middle text-center\">
                                        <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"{{ path('modifierArb', {'id': arbitre_match.idarb}) }}\">Modifier</a></span>
                                    </td>

                                </tr>

                                {% endfor %}
                                </tbody>

                                <span class=\"badge badge-sm bg-gradient-success\"> <a href=\"{{ path('addArb') }}\">Ajouter Arbitre</a></span>
                                </br>
                            </table>
                            <span class=\"badge badge-sm bg-gradient-faded-success-vertical\">  {{ knp_pagination_render(b) }} </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class=\"badge badge-sm bg-gradient\"> <a href=\"{{ path('listArb') }}\">PDF</a></span>

        <a href=\"{{path('display_arb') }}\"><i class=\"btn btn-danger\" data-feather=\"arrow-down\"></i>ascendant specialite</a>
    </div>
        </div>
    </div>
    </div>
    </div>
{% endblock %}
            {% endblock %}
", "arbitre_match/index.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\arbitre_match\\index.html.twig");
    }
}
