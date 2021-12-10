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

/* test/exercice_twig.html.twig */
class __TwigTemplate_2b15b62ffca40f1444b951c289284aec5bb7612d0ac429857c50f1909b236a8b extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/exercice_twig.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/exercice_twig.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/exercice_twig.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<h3>Q1</h3>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 12
            echo "    <div>

    <b>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "prenom", [], "any", false, false, false, 14), "html", null, true);
            echo "</b>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "statut", [], "any", false, false, false, 14), "html", null, true);
            echo "),
    <i> date de naissance : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 15), "d-m-y"), "html", null, true);
            echo "</i>
    
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
<h3>Q2</h3>

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 23
            echo "   
    ";
            // line 24
            if ((twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 24) == "Dupont")) {
                // line 25
                echo "     <div>
    <b>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 26), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "prenom", [], "any", false, false, false, 26), "html", null, true);
                echo "</b>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "statut", [], "any", false, false, false, 26), "html", null, true);
                echo "),
    <i> date de naissance : ";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 27), "d-m-y"), "html", null, true);
                echo "</i>
    
    </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
<h3>Q3</h3>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 35, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 36
            echo "   
     <div>
        <b>";
            // line 38
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 38)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "prenom", [], "any", false, false, false, 38), "html", null, true);
            echo "</b>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "statut", [], "any", false, false, false, 38), "html", null, true);
            echo "),
        <i> date de naissance : ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 39), "d-m-y"), "html", null, true);
            echo "</i>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
<h3>Q4</h3>

";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 47
            echo "
   ";
            // line 48
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 48), "y") > 50)) {
                // line 49
                echo "     <div>
        <b>";
                // line 50
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 50)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "prenom", [], "any", false, false, false, 50), "html", null, true);
                echo "</b>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "statut", [], "any", false, false, false, 50), "html", null, true);
                echo "),
        <i> date de naissance : ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 51), "d-m-y"), "html", null, true);
                echo "</i>
    </div>
    ";
            }
            // line 54
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
<h3>Q5</h3>
";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["personnes"]) || array_key_exists("personnes", $context) ? $context["personnes"] : (function () { throw new RuntimeError('Variable "personnes" does not exist.', 58, $this->source); })()), function ($__b__, $__a__) use ($context, $macros) { $context["b"] = $__b__; $context["a"] = $__a__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 58, $this->source); })()), "naissance", [], "any", false, false, false, 58) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 58, $this->source); })()), "naissance", [], "any", false, false, false, 58)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 59
            echo "
     <div>
        <b>";
            // line 61
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "nom", [], "any", false, false, false, 61)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "prenom", [], "any", false, false, false, 61), "html", null, true);
            echo "</b>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "statut", [], "any", false, false, false, 61), "html", null, true);
            echo "),
        <i> date de naissance : ";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["perso"], "naissance", [], "any", false, false, false, 62), "d-m-y"), "html", null, true);
            echo "</i>
    </div>
  
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test/exercice_twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 67,  245 => 62,  237 => 61,  233 => 59,  229 => 58,  225 => 56,  218 => 54,  212 => 51,  204 => 50,  201 => 49,  199 => 48,  196 => 47,  192 => 46,  187 => 43,  177 => 39,  169 => 38,  165 => 36,  161 => 35,  156 => 32,  145 => 27,  137 => 26,  134 => 25,  132 => 24,  129 => 23,  125 => 22,  120 => 19,  110 => 15,  102 => 14,  98 => 12,  94 => 11,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}

{% endblock %}

{% block body %}
<h3>Q1</h3>

{% for perso in personnes %}
    <div>

    <b>{{perso.nom}} {{perso.prenom}}</b>({{perso.statut}}),
    <i> date de naissance : {{perso.naissance|date('d-m-y')}}</i>
    
    </div>
{% endfor %}

<h3>Q2</h3>

{% for perso in personnes %}
   
    {% if perso.nom == 'Dupont' %}
     <div>
    <b>{{perso.nom}} {{perso.prenom}}</b>({{perso.statut}}),
    <i> date de naissance : {{perso.naissance|date('d-m-y')}}</i>
    
    </div>
    {% endif %}
{% endfor %}

<h3>Q3</h3>

{% for perso in personnes|slice(0,3) %}
   
     <div>
        <b>{{perso.nom|upper}} {{perso.prenom}}</b>({{perso.statut}}),
        <i> date de naissance : {{perso.naissance|date('d-m-y')}}</i>
    </div>

{% endfor %}

<h3>Q4</h3>

{% for perso in personnes %}

   {% if perso.naissance|date('y') > 50 %}
     <div>
        <b>{{perso.nom|upper}} {{perso.prenom}}</b>({{perso.statut}}),
        <i> date de naissance : {{perso.naissance|date('d-m-y')}}</i>
    </div>
    {% endif %}

{% endfor %}

<h3>Q5</h3>
{% for perso in personnes|sort((b, a) => b.naissance <=> a.naissance) %}

     <div>
        <b>{{perso.nom|upper}} {{perso.prenom}}</b>({{perso.statut}}),
        <i> date de naissance : {{perso.naissance|date('d-m-y')}}</i>
    </div>
  
    
{% endfor %}

{% endblock %}
", "test/exercice_twig.html.twig", "C:\\Users\\matho\\Desktop\\site\\symfony\\projectW3f\\templates\\test\\exercice_twig.html.twig");
    }
}
