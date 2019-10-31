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

/* client_final/show.html.twig */
class __TwigTemplate_f1cd9cc6d01378fa3a0e3c11a46adea849d802f3be9d3a1901ccd99e476d4a0b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client_final/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client_final/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ClientFinal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ClientFinal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raison_sociale</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 16, $this->source); })()), "raisonSociale", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Enseigne</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 20, $this->source); })()), "enseigne", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom_responsable</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 24, $this->source); })()), "nomResponsable", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 28, $this->source); })()), "adresse", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code_postal</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 32, $this->source); })()), "codePostal", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 36, $this->source); })()), "ville", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 40, $this->source); })()), "telephone", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 44, $this->source); })()), "fax", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 48, $this->source); })()), "mobile", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 52, $this->source); })()), "mail", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_final_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_final_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client_final"]) || array_key_exists("client_final", $context) ? $context["client_final"] : (function () { throw new RuntimeError('Variable "client_final" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 61
        echo twig_include($this->env, $context, "client_final/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "client_final/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 61,  164 => 59,  159 => 57,  151 => 52,  144 => 48,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ClientFinal{% endblock %}

{% block body %}
    <h1>ClientFinal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ client_final.id }}</td>
            </tr>
            <tr>
                <th>Raison_sociale</th>
                <td>{{ client_final.raisonSociale }}</td>
            </tr>
            <tr>
                <th>Enseigne</th>
                <td>{{ client_final.enseigne }}</td>
            </tr>
            <tr>
                <th>Nom_responsable</th>
                <td>{{ client_final.nomResponsable }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ client_final.adresse }}</td>
            </tr>
            <tr>
                <th>Code_postal</th>
                <td>{{ client_final.codePostal }}</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>{{ client_final.ville }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ client_final.telephone }}</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>{{ client_final.fax }}</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ client_final.mobile }}</td>
            </tr>
            <tr>
                <th>Mail</th>
                <td>{{ client_final.mail }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('client_final_index') }}\">back to list</a>

    <a href=\"{{ path('client_final_edit', {'id': client_final.id}) }}\">edit</a>

    {{ include('client_final/_delete_form.html.twig') }}
{% endblock %}
", "client_final/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\client_final\\show.html.twig");
    }
}
