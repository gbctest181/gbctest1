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

/* proces_verbal/show.html.twig */
class __TwigTemplate_795ef15ba19281bd5b3495325b383255d664cc2ed29322abd64f134c54064f15 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proces_verbal/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proces_verbal/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ProcesVerbal";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ProcesVerbal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Devis</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 16, $this->source); })()), "devis", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_devis</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 20, $this->source); })()), "dateDevis", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 20, $this->source); })()), "dateDevis", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Commande_client</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 24, $this->source); })()), "commandeClient", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_commande</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 28, $this->source); })()), "dateCommande", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 28, $this->source); })()), "dateCommande", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Cctp</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 32, $this->source); })()), "cctp", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_cctp</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 36, $this->source); })()), "dateCctp", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 36, $this->source); })()), "dateCctp", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Siganture_client</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 40, $this->source); })()), "sigantureClient", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Signature_gbc</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 44, $this->source); })()), "signatureGbc", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proces_verbal_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proces_verbal_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["proces_verbal"]) || array_key_exists("proces_verbal", $context) ? $context["proces_verbal"] : (function () { throw new RuntimeError('Variable "proces_verbal" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "proces_verbal/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "proces_verbal/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  150 => 51,  145 => 49,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProcesVerbal{% endblock %}

{% block body %}
    <h1>ProcesVerbal</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ proces_verbal.id }}</td>
            </tr>
            <tr>
                <th>Devis</th>
                <td>{{ proces_verbal.devis }}</td>
            </tr>
            <tr>
                <th>Date_devis</th>
                <td>{{ proces_verbal.dateDevis ? proces_verbal.dateDevis|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Commande_client</th>
                <td>{{ proces_verbal.commandeClient }}</td>
            </tr>
            <tr>
                <th>Date_commande</th>
                <td>{{ proces_verbal.dateCommande ? proces_verbal.dateCommande|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Cctp</th>
                <td>{{ proces_verbal.cctp }}</td>
            </tr>
            <tr>
                <th>Date_cctp</th>
                <td>{{ proces_verbal.dateCctp ? proces_verbal.dateCctp|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Siganture_client</th>
                <td>{{ proces_verbal.sigantureClient }}</td>
            </tr>
            <tr>
                <th>Signature_gbc</th>
                <td>{{ proces_verbal.signatureGbc }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('proces_verbal_index') }}\">back to list</a>

    <a href=\"{{ path('proces_verbal_edit', {'id': proces_verbal.id}) }}\">edit</a>

    {{ include('proces_verbal/_delete_form.html.twig') }}
{% endblock %}
", "proces_verbal/show.html.twig", "C:\\wamp64\\www\\gbc\\gbconcept34\\templates\\proces_verbal\\show.html.twig");
    }
}
