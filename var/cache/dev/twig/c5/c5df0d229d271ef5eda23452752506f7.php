<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/edit.html.twig */
class __TwigTemplate_13a4277d64d358e52f1e6ddd1d195e79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        yield "    <main class=\"container\">
        <h1>Modifier mon produit</h1>
        <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits");
        yield "\" class=\"btn btn-secondary\">Retour</a>

        ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 6, $this->source); })()), 'form_start');
        yield "
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'row', ["label" => "Nom du produit", "value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7)]);
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'row', ["label" => "Description du produit", "value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8)]);
        yield "
        ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9), 'row', ["label" => "Image du produit", "value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9)]);
        yield "
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 10, $this->source); })()), "stock", [], "any", false, false, false, 10), 'row', ["label" => "Stock du produit", "value" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 10, $this->source); })()), "stock", [], "any", false, false, false, 10)]);
        yield "
        
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\">
        
        ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["produitForm"]) || array_key_exists("produitForm", $context) ? $context["produitForm"] : (function () { throw new RuntimeError('Variable "produitForm" does not exist.', 14, $this->source); })()), 'form_end');
        yield "
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/edit.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  97 => 14,  90 => 10,  86 => 9,  82 => 8,  78 => 7,  74 => 6,  69 => 4,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <main class=\"container\">
        <h1>Modifier mon produit</h1>
        <a href=\"{{ path('admin_produits') }}\" class=\"btn btn-secondary\">Retour</a>

        {{ form_start(produitForm) }}
        {{ form_row(produitForm.nom, {'label': 'Nom du produit', 'value': produit.nom}) }}
        {{ form_row(produitForm.description, {'label': 'Description du produit', 'value': produit.description}) }}
        {{ form_row(produitForm.image, {'label': 'Image du produit', 'value': produit.image}) }}
        {{ form_row(produitForm.stock, {'label': 'Stock du produit', 'value': produit.stock}) }}
        
        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\">
        
        {{ form_end(produitForm) }}
    </main>
{% endblock %}", "admin/edit.html.twig", "C:\\Users\\stagiaire.DESKTOP-D2OPKD9\\Desktop\\symfony eval\\project\\templates\\admin\\edit.html.twig");
    }
}
