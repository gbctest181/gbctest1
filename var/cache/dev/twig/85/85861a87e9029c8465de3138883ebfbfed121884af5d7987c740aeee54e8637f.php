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

/* intervention/show.html.twig */
class __TwigTemplate_82c768d764365461bda4edd887f140274436a3442fa546e96099a420ed5b4722 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "intervention/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "intervention/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Intervention";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Intervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Rapport_technicien</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 20, $this->source); })()), "rapportTechnicien", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observation_client</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 24, $this->source); })()), "observationClient", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Signature_client</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 28, $this->source); })()), "signatureClient", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Signature_gbc</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 32, $this->source); })()), "signatureGbc", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["intervention"]) || array_key_exists("intervention", $context) ? $context["intervention"] : (function () { throw new RuntimeError('Variable "intervention" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "intervention/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "intervention/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Intervention{% endblock %}

{% block body %}
    <h1>Intervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ intervention.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ intervention.date ? intervention.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Rapport_technicien</th>
                <td>{{ intervention.rapportTechnicien }}</td>
            </tr>
            <tr>
                <th>Observation_client</th>
                <td>{{ intervention.observationClient }}</td>
            </tr>
            <tr>
                <th>Signature_client</th>
                <td>{{ intervention.signatureClient }}</td>
            </tr>
            <tr>
                <th>Signature_gbc</th>
                <td>{{ intervention.signatureGbc }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('intervention_index') }}\">back to list</a>

    <a href=\"{{ path('intervention_edit', {'id': intervention.id}) }}\">edit</a>

    {{ include('intervention/_delete_form.html.twig') }}
{% endblock %}
", "intervention/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\intervention\\show.html.twig");
    }
}
