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

/* club/index.html.twig */
class __TwigTemplate_8caf46f1e4fb581c65c5c09cfaa212aa63a1e8316861e19f3089205f2554148e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/index.html.twig", 1);
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
        // line 39
        echo "
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card my-4\">

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <div class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                </div>
            </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
        </li>
    </ul><br><br><br><br>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
    jQuery(document).ready(function() {
    var searchRequest = null;
    \$(\"#search\").keyup(function() {
        var minlength = 1;
        var that = this;
        var value = \$(this).val();
        var entitySelector = \$(\"#entitiesNav\").html('');
        if (value.length >= minlength ) {
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"GET\",
                url: \"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                data: {
                    'q' : value
                },
                dataType: \"text\",
                success: function(msg){
                    //we need to check if the value is the same
                    if (value===\$(that).val()) {
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(idclub, value) {
                                if (key === 'b') {
                                    if (idclub !== 'error') {
                                        console.log(value[1]);
                                        entitySelector.append('<li><b>'+value[1]+'</b><a href=\"display_club\"')
                                    } else {
                                        entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                    }
                                }
                            });
                        });
                    }
                }
            });
        }
    });
});
    </script>


                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <h6 class=\"text-white text-capitalize ps-3\">Club table</h6>
                        <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adddd");
        echo "\">Ajouter Club</a></span>
                        <span style=\"display: flex;align-items: center;justify-content: space-between; width: 150px \" class=\"badge badge-sm bg-gradient-success\"><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_CategorieClub");
        echo "\">Table Categorie</a></span>

                    </div>
                </div>
                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idclub</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">categorie</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">validite</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">numtel</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">adresse</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 125
            echo "                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "idclub", [], "any", false, false, false, 129), "html", null, true);
            echo "</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                        <p class=\"text-xs font-weight-bold mb-0\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "categorie", [], "any", false, false, false, 136), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "validite", [], "any", false, false, false, 144), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "numtel", [], "any", false, false, false, 151), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["club"], "adresse", [], "any", false, false, false, 158), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    </td>


                                    <td class=\"align-middle\">
                                        <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supp_club", ["id" => twig_get_attribute($this->env, $this->source, $context["club"], "idclub", [], "any", false, false, false, 165)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierclub", ["id" => twig_get_attribute($this->env, $this->source, $context["club"], "idclub", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                    </td>
                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                            </tbody>
                        </table>
                        <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trie1");
        echo "\"><i class=\"btn btn-danger\" data-feather=\"arrow-down\"></i>ascendant date</a>
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
        return "club/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 173,  244 => 171,  233 => 166,  229 => 165,  219 => 158,  209 => 151,  199 => 144,  188 => 136,  178 => 129,  172 => 125,  168 => 124,  147 => 106,  143 => 105,  107 => 72,  72 => 39,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}


{#
    <div class=\"example-wrapper\">
        <table>
            <thead>
            <th>idclub</th>
            <th>categorie</th>
            <th>validite</th>
            <th>numtel</th>
            <th>adresse</th>
            <th>Supprimer</th>
            <th>Modifier</th>
            </thead>
            <tbody>
            {% for club in b  %}
                <tr>
                    <td>{{club.idclub}}</td>
                    <td>{{club.categorie}}</td>
                    <td>{{club.validite}}</td>
                    <td>{{club.numtel}}</td>
                    <td>{{club.adresse}}</td>
                    <td>
                        <a href=\"{{ path('supp_club',{'id':club.idclub}) }}\">Supprimer</a>
                    </td>
                    <td>
                        <a href=\"{{ path('modifierclub',{'id':club.idclub}) }}\">Modifier</a>
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

    <div class=\"album py-5 bg-light\">
        <div class=\"container\">
            <div class=\"sidebar-search\">
                <div class=\"input-group custom-search-form\">
                    <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search here\">
                </div>
            </div>
    <ul class=\"nav\" id=\"side-menu\">
        <li>
            <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
        </li>
    </ul><br><br><br><br>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
    jQuery(document).ready(function() {
    var searchRequest = null;
    \$(\"#search\").keyup(function() {
        var minlength = 1;
        var that = this;
        var value = \$(this).val();
        var entitySelector = \$(\"#entitiesNav\").html('');
        if (value.length >= minlength ) {
            if (searchRequest != null)
                searchRequest.abort();
            searchRequest = \$.ajax({
                type: \"GET\",
                url: \"{{ path('ajax_search') }}\",
                data: {
                    'q' : value
                },
                dataType: \"text\",
                success: function(msg){
                    //we need to check if the value is the same
                    if (value===\$(that).val()) {
                        var result = JSON.parse(msg);
                        \$.each(result, function(key, arr) {
                            \$.each(arr, function(idclub, value) {
                                if (key === 'b') {
                                    if (idclub !== 'error') {
                                        console.log(value[1]);
                                        entitySelector.append('<li><b>'+value[1]+'</b><a href=\"display_club\"')
                                    } else {
                                        entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                    }
                                }
                            });
                        });
                    }
                }
            });
        }
    });
});
    </script>


                <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                    <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                        <h6 class=\"text-white text-capitalize ps-3\">Club table</h6>
                        <span style=\"display: flex;align-items: center;justify-content: center; width: 150px\" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('adddd') }}\">Ajouter Club</a></span>
                        <span style=\"display: flex;align-items: center;justify-content: space-between; width: 150px \" class=\"badge badge-sm bg-gradient-success\"><a href=\"{{ path('display_CategorieClub') }}\">Table Categorie</a></span>

                    </div>
                </div>
                <div class=\"card-body px-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">idclub</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">categorie</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">validite</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">numtel</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">adresse</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for club in b  %}
                                <tr>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"mb-0 text-sm\">{{club.idclub}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                        <p class=\"text-xs font-weight-bold mb-0\">{{club.categorie}}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{club.validite}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{club.numtel}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class=\"d-flex px-2 py-1\">
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <p class=\"text-xs font-weight-bold mb-0\">{{club.adresse}}</p>
                                            </div>
                                        </div>
                                    </td>


                                    <td class=\"align-middle\">
                                        <a class=\"btn btn-link text-danger text-gradient px-3 mb-0\" href=\"{{ path('supp_club',{'id':club.idclub}) }}\"><i class=\"material-icons text-sm me-2\">delete</i>Delete</a>
                                        <a class=\"btn btn-link text-dark px-3 mb-0\" href=\"{{ path('modifierclub',{'id':club.idclub}) }}\"><i class=\"material-icons text-sm me-2\">edit</i>Edit</a>
                                    </td>
                                </tr>

                            {% endfor %}
                            </tbody>
                        </table>
                        <a href=\"{{path('trie1') }}\"><i class=\"btn btn-danger\" data-feather=\"arrow-down\"></i>ascendant date</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "club/index.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\club\\index.html.twig");
    }
}
