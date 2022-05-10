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

/* client/club/showClubByCat.html.twig */
class __TwigTemplate_b13a182e599a4acd1a3acbfa1a2ce1564c5cbcdf9e20a0679f9b3a5d32b703cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/club/showClubByCat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/club/showClubByCat.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "client/club/showClubByCat.html.twig", 1);
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
        echo "    <section class=\"bet-this-game\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CLUBS BY CATEGORIE & SECTION</h2>

                        </div>
                    </div>
                </div>



                <div class=\"album py-5 bg-light\">
                    <div class=\"container\">
                        <div class=\"sidebar-search\" >
                            <div class=\"input-group custom-search-form\">
                                <input    type=\"text\" id=\"search\" class=\"form-control widget_input\" placeholder=\"Chercher...\" style=\"width: 1180px;background: white\">
                            </div>
                            <br>
                            <!-- /input-group -->
                            <ul class=\"nav\" id=\"side-menu\">
                                <li>
                                    <a href=\"#\"> <span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                                    </ul>
                                </li>
                            </ul>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 36
            echo "
                                <div class=\"main-content\">
                                    <div class=\"team-single\">

                                        <div class=\"img-area\">
                                            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("FrontOffice/assets/images/blog-img-3.png"), "html", null, true);
            echo "\">

                                        </div>
                                        <div class=\"card-body\">

                                            <p class=\"card-text\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "nomentreneur", [], "any", false, false, false, 46), "html", null, true);
            echo "</p>
                                            <p class=\"card-text\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "activite", [], "any", false, false, false, 47), "html", null, true);
            echo "</p>

                                        </div>
                                    </div>

                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div id=\"search\"></div>





        </div>
    </section>


    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">


        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {



                var minlength = 3;
                var that = this;
                var value = \$(this).val(); // elyyktbo fi input 7atito fi var var
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);

                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'products') {
                                            if (id != 'error') {
                                                x= document.getElementById(\"containerr\");

                                                entitySelector.append('<div style=\"display: table;width:100%;padding: 15px\"><span style=\"text-align: center\">'+value[2]+'</span><br/><a href=\"/show_products_cat/'+id+'\">'+'<img src=\"/uploads/produit_image/'+value[0]+'\" style=\"width: 150px; height: 150px\"/>'+'</a></div>');


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
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/club/showClubByCat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 89,  136 => 54,  123 => 47,  119 => 46,  111 => 41,  104 => 36,  100 => 35,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}


{% block body %}
    <section class=\"bet-this-game\">
        <div class=\"overlay pt-120 pb-120\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-header text-center\">

                            <h2 class=\"title\">LIST CLUBS BY CATEGORIE & SECTION</h2>

                        </div>
                    </div>
                </div>



                <div class=\"album py-5 bg-light\">
                    <div class=\"container\">
                        <div class=\"sidebar-search\" >
                            <div class=\"input-group custom-search-form\">
                                <input    type=\"text\" id=\"search\" class=\"form-control widget_input\" placeholder=\"Chercher...\" style=\"width: 1180px;background: white\">
                            </div>
                            <br>
                            <!-- /input-group -->
                            <ul class=\"nav\" id=\"side-menu\">
                                <li>
                                    <a href=\"#\"> <span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
                                    </ul>
                                </li>
                            </ul>
                            {% for c in clubs %}

                                <div class=\"main-content\">
                                    <div class=\"team-single\">

                                        <div class=\"img-area\">
                                            <img src=\"{{ asset('FrontOffice/assets/images/blog-img-3.png') }}\">

                                        </div>
                                        <div class=\"card-body\">

                                            <p class=\"card-text\">{{ c.nomentreneur }}</p>
                                            <p class=\"card-text\">{{c.activite }}</p>

                                        </div>
                                    </div>

                                </div>
                            {% endfor %}

                        </div>
                    </div>
                </div>
            </div>
            <div id=\"search\"></div>





        </div>
    </section>


    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">


        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {



                var minlength = 3;
                var that = this;
                var value = \$(this).val(); // elyyktbo fi input 7atito fi var var
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
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);

                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'products') {
                                            if (id != 'error') {
                                                x= document.getElementById(\"containerr\");

                                                entitySelector.append('<div style=\"display: table;width:100%;padding: 15px\"><span style=\"text-align: center\">'+value[2]+'</span><br/><a href=\"/show_products_cat/'+id+'\">'+'<img src=\"/uploads/produit_image/'+value[0]+'\" style=\"width: 150px; height: 150px\"/>'+'</a></div>');


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
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
{% endblock %}", "client/club/showClubByCat.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\client\\club\\showClubByCat.html.twig");
    }
}
