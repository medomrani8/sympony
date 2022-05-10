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

/* stock/addstock.html.twig */
class __TwigTemplate_8259e5d7369da084f0d37d4170e583b493f1e08fe37e1ca93e5397c26745fb75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/addstock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stock/addstock.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stock/addstock.html.twig", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-lg-4 col-md-8 col-12 mx-auto\">
            <div class=\"card z-index-0 fadeIn3 fadeInBottom\">



                <div class=\"col-md-12\"  style=\"display: flex; justify-content: center;align-items:center;width: 100%\" >

                        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <br/>                    <h3>Ajouter Un Stock</h3>


                    <div class=\"form-group\">
                            <label for=\"nom\">Nom*</label>
                            <div class=\"input-group input-group-outline my-3\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom\">Prix*</label>

                            <div class=\"form-group\"><div class=\"input-group input-group-outline my-3\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 28, $this->source); })()), "prix", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 29, $this->source); })()), "prix", [], "any", false, false, false, 29), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                            </div>
                            <div class=\"form-group\">
                                <label for=\"nom\">Quantite*</label>

                                <div class=\"input-group input-group-outline my-3\">

                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "quantite", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), "quantite", [], "any", false, false, false, 38), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                            </div>
                            </div>



                            <div class=\"form-group\">

                                <div class=\"col-sm-12\">
                                    <div class=\"card-box\">


                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "dropify", "data-height" => "300"]]);
        echo "

                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-outline my-3\"><br/>

                                <label for=\"nom\">Description</label>

                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-outline my-3\">

                                <label for=\"nom\">Categorie</label><br/>

                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 70, $this->source); })()), "category", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 71, $this->source); })()), "category", [], "any", false, false, false, 71), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                                </div>
                            </div>

                            <div class=\"form-group\" style=\"width:100%;display: flex;align-items: center\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 77, $this->source); })()), "Submit", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "btn btn-primary waves-effect waves-light"]]);
        echo "


                            </div>


                            ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
                            ";
        // line 85
        echo "                            ";
        // line 86
        echo "                            ";
        // line 87
        echo "                            ";
        // line 88
        echo "                            ";
        // line 89
        echo "                            ";
        // line 90
        echo "                            ";
        // line 91
        echo "                            ";
        // line 92
        echo "                            ";
        // line 93
        echo "                            ";
        // line 94
        echo "                            ";
        // line 95
        echo "                            ";
        // line 96
        echo "                            ";
        // line 97
        echo "                            ";
        // line 98
        echo "                            ";
        // line 99
        echo "                            ";
        // line 100
        echo "                            ";
        // line 101
        echo "                            ";
        // line 102
        echo "                            ";
        // line 103
        echo "                            ";
        // line 104
        echo "                            ";
        // line 105
        echo "                            ";
        // line 106
        echo "                            ";
        // line 107
        echo "
                            ";
        // line 109
        echo "                            ";
        // line 110
        echo "                            ";
        // line 111
        echo "                            ";
        // line 112
        echo "                            ";
        // line 113
        echo "                            ";
        // line 114
        echo "                            ";
        // line 115
        echo "                            ";
        // line 116
        echo "
                            ";
        // line 118
        echo "                        </div>
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
        return "stock/addstock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 118,  250 => 116,  248 => 115,  246 => 114,  244 => 113,  242 => 112,  240 => 111,  238 => 110,  236 => 109,  233 => 107,  231 => 106,  229 => 105,  227 => 104,  225 => 103,  223 => 102,  221 => 101,  219 => 100,  217 => 99,  215 => 98,  213 => 97,  211 => 96,  209 => 95,  207 => 94,  205 => 93,  203 => 92,  201 => 91,  199 => 90,  197 => 89,  195 => 88,  193 => 87,  191 => 86,  189 => 85,  185 => 83,  176 => 77,  167 => 71,  163 => 70,  151 => 61,  138 => 51,  122 => 38,  118 => 37,  107 => 29,  103 => 28,  92 => 20,  88 => 19,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-lg-4 col-md-8 col-12 mx-auto\">
            <div class=\"card z-index-0 fadeIn3 fadeInBottom\">



                <div class=\"col-md-12\"  style=\"display: flex; justify-content: center;align-items:center;width: 100%\" >

                        {{ form_start(f, {attr: {novalidate: 'novalidate'}}) }}
                    <br/>                    <h3>Ajouter Un Stock</h3>


                    <div class=\"form-group\">
                            <label for=\"nom\">Nom*</label>
                            <div class=\"input-group input-group-outline my-3\">
                            {{ form_widget(f.nom, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(f.nom, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                        </div>
                        <div class=\"form-group\">
                            <label for=\"nom\">Prix*</label>

                            <div class=\"form-group\"><div class=\"input-group input-group-outline my-3\">
                                {{ form_widget(f.prix, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(f.prix, {'attr': {'class': 'text-danger'}}) }}

                            </div>
                            <div class=\"form-group\">
                                <label for=\"nom\">Quantite*</label>

                                <div class=\"input-group input-group-outline my-3\">

                                {{ form_widget(f.quantite, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(f.quantite, {'attr': {'class': 'text-danger'}}) }}

                            </div>
                            </div>



                            <div class=\"form-group\">

                                <div class=\"col-sm-12\">
                                    <div class=\"card-box\">


                                        {{ form_widget(f.image, {'attr': {'class': 'dropify','data-height':'300'}}) }}

                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-outline my-3\"><br/>

                                <label for=\"nom\">Description</label>

                                {{ form_widget(f.description, {'attr': {'class': 'form-control'}}) }}

                            </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group input-group-outline my-3\">

                                <label for=\"nom\">Categorie</label><br/>

                                {{ form_widget(f.category, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(f.category, {'attr': {'class': 'text-danger'}}) }}

                                </div>
                            </div>

                            <div class=\"form-group\" style=\"width:100%;display: flex;align-items: center\">
                                {{ form_widget(f.Submit, {'attr': {'class': 'btn btn-primary waves-effect waves-light'}}) }}


                            </div>


                            {{ form_end(f) }}
                            {#                            <form action=\"#\" data-parsley-validate=\"\" >#}
                            {#                                <div class=\"form-group\">#}
                            {#                                    <label for=\"userName\">User Name*</label>#}
                            {#                                    <input type=\"text\" name=\"nick\" parsley-trigger=\"change\" required=\"\" placeholder=\"Enter user name\" class=\"form-control\" id=\"userName\">#}
                            {#                                </div>#}
                            {#                                <div class=\"form-group\">#}
                            {#                                    <label for=\"emailAddress\">Email address*</label>#}
                            {#                                    <input type=\"email\" name=\"email\" parsley-trigger=\"change\" required=\"\" placeholder=\"Enter email\" class=\"form-control\" id=\"emailAddress\">#}
                            {#                                </div>#}
                            {#                                <div class=\"form-group\">#}
                            {#                                    <label for=\"pass1\">Password*</label>#}
                            {#                                    <input id=\"pass1\" type=\"password\" placeholder=\"Password\" required=\"\" class=\"form-control\">#}
                            {#                                </div>#}
                            {#                                <div class=\"form-group\">#}
                            {#                                    <label for=\"passWord2\">Confirm Password *</label>#}
                            {#                                    <input data-parsley-equalto=\"#pass1\" type=\"password\" required=\"\" placeholder=\"Password\" class=\"form-control\" id=\"passWord2\">#}
                            {#                                </div>#}
                            {#                                <div class=\"form-group\">#}
                            {#                                    <div class=\"checkbox\">#}
                            {#                                        <input id=\"remember-1\" type=\"checkbox\" data-parsley-multiple=\"remember-1\">#}
                            {#                                        <label for=\"remember-1\"> Remember me </label>#}
                            {#                                    </div>#}
                            {#                                </div>#}

                            {#                                <div class=\"form-group text-right m-b-0\">#}
                            {#                                    <button class=\"btn btn-primary waves-effect waves-light\" type=\"submit\">#}
                            {#                                        Submit#}
                            {#                                    </button>#}
                            {#                                    <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light m-l-5\">#}
                            {#                                        Cancel#}
                            {#                                    </button>#}
                            {#                                </div>#}

                            {#                            </form>#}
                        </div>
                    </div>

            </div>

    </div>
        </div>
    </div>

{% endblock %}", "stock/addstock.html.twig", "C:\\Users\\Amirov\\Downloads\\symf\\templates\\stock\\addstock.html.twig");
    }
}
