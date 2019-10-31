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

/* piece_ve/show.html.twig */
class __TwigTemplate_d39f996c51d598d814a694825cd7ca4623c821ba4f076c4034751ec040779d7b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "piece_ve/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "piece_ve/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PieceVE";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>PieceVE</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 16, $this->source); })()), "marque", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 20, $this->source); })()), "modele", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Version_logiciel</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 24, $this->source); })()), "versionLogiciel", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 28, $this->source); })()), "type", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("piece_v_e_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("piece_v_e_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["piece_v_e"]) || array_key_exists("piece_v_e", $context) ? $context["piece_v_e"] : (function () { throw new RuntimeError('Variable "piece_v_e" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "piece_v_e/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "piece_ve/show.html.twig";
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

{% block title %}PieceVE{% endblock %}

{% block body %}
    <h1>PieceVE</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ piece_v_e.id }}</td>
            </tr>
            <tr>
                <th>Marque</th>
                <td>{{ piece_v_e.marque }}</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>{{ piece_v_e.modele }}</td>
            </tr>
            <tr>
                <th>Version_logiciel</th>
                <td>{{ piece_v_e.versionLogiciel }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ piece_v_e.type }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('piece_v_e_index') }}\">back to list</a>

    <a href=\"{{ path('piece_v_e_edit', {'id': piece_v_e.id}) }}\">edit</a>

    {{ include('piece_v_e/_delete_form.html.twig') }}
{% endblock %}
", "piece_ve/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\piece_ve\\show.html.twig");
    }
}
