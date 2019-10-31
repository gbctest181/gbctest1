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

/* client_intervention/show.html.twig */
class __TwigTemplate_c1ffba81d3b7b70d8c4cbea4fe4b4754cdfe6c77e279fa56ff0b185aa7610b8c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client_intervention/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client_intervention/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ClientIntervention";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ClientIntervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 20, $this->source); })()), "adresse", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code_postal</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 24, $this->source); })()), "codePostal", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 28, $this->source); })()), "ville", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 32
        ((twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 40, $this->source); })()), "fax", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 44, $this->source); })()), "mobile", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 48, $this->source); })()), "mail", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Representant</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 52, $this->source); })()), "representant", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fonction</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 56, $this->source); })()), "fonction", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_intervention_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_intervention_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client_intervention"]) || array_key_exists("client_intervention", $context) ? $context["client_intervention"] : (function () { throw new RuntimeError('Variable "client_intervention" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 65
        echo twig_include($this->env, $context, "client_intervention/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client_intervention/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 65,  171 => 63,  166 => 61,  158 => 56,  151 => 52,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ClientIntervention{% endblock %}

{% block body %}
    <h1>ClientIntervention</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client_intervention.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ client_intervention.nom }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client_intervention.adresse }}</td>
            </tr>
            <tr>
                <th>Code_postal</th>
                <td>{{ client_intervention.codePostal }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ client_intervention.ville }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ client_intervention.date ? client_intervention.date|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client_intervention.telephone }}</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>{{ client_intervention.fax }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ client_intervention.mobile }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ client_intervention.mail }}</td>
            </tr>
            <tr>
                <th>Representant</th>
                <td>{{ client_intervention.representant }}</td>
            </tr>
            <tr>
                <th>Fonction</th>
                <td>{{ client_intervention.fonction }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('client_intervention_index') }}\">back to list</a>

    <a href=\"{{ path('client_intervention_edit', {'id': client_intervention.id}) }}\">edit</a>

    {{ include('client_intervention/_delete_form.html.twig') }}
{% endblock %}
", "client_intervention/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\client_intervention\\show.html.twig");
    }
}
