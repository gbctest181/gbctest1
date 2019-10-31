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

/* materiel_ve/show.html.twig */
class __TwigTemplate_0f6051b02586361bf7eebcfa838298d5610be0d1422e7a85898ca4530b23d1da extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel_ve/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel_ve/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MaterielVE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>MaterielVE</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 16, $this->source); })()), "emplacement", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 20, $this->source); })()), "quantite", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observation</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 24, $this->source); })()), "observation", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resultat_test</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 28, $this->source); })()), "resultatTest", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel_v_e_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("materiel_v_e_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["materiel_v_e"]) || array_key_exists("materiel_v_e", $context) ? $context["materiel_v_e"] : (function () { throw new RuntimeError('Variable "materiel_v_e" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "materiel_v_e/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "materiel_ve/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  122 => 35,  117 => 33,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MaterielVE{% endblock %}

{% block body %}
    <h1>MaterielVE</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ materiel_v_e.id }}</td>
            </tr>
            <tr>
                <th>Emplacement</th>
                <td>{{ materiel_v_e.emplacement }}</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>{{ materiel_v_e.quantite }}</td>
            </tr>
            <tr>
                <th>Observation</th>
                <td>{{ materiel_v_e.observation }}</td>
            </tr>
            <tr>
                <th>Resultat_test</th>
                <td>{{ materiel_v_e.resultatTest }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('materiel_v_e_index') }}\">back to list</a>

    <a href=\"{{ path('materiel_v_e_edit', {'id': materiel_v_e.id}) }}\">edit</a>

    {{ include('materiel_v_e/_delete_form.html.twig') }}
{% endblock %}
", "materiel_ve/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\materiel_ve\\show.html.twig");
    }
}
