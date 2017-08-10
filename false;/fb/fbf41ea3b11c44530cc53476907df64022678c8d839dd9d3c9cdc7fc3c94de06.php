<?php

/* ::base.html.twig */
class __TwigTemplate_a63d641809f695a678e7e3ceef3f22104a997f0f1f8d454a56d8276e348bac6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd9cedd5f21c690de817fee718c820cc03a408f115d2f0ec21a7295ebf2380f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9cedd5f21c690de817fee718c820cc03a408f115d2f0ec21a7295ebf2380f7->enter($__internal_bd9cedd5f21c690de817fee718c820cc03a408f115d2f0ec21a7295ebf2380f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7d3e6e9e1c1983a6fe273d6346c4f656dda9a83dfeef959f3d27c975cb3874cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e6e9e1c1983a6fe273d6346c4f656dda9a83dfeef959f3d27c975cb3874cc->enter($__internal_7d3e6e9e1c1983a6fe273d6346c4f656dda9a83dfeef959f3d27c975cb3874cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bd9cedd5f21c690de817fee718c820cc03a408f115d2f0ec21a7295ebf2380f7->leave($__internal_bd9cedd5f21c690de817fee718c820cc03a408f115d2f0ec21a7295ebf2380f7_prof);

        
        $__internal_7d3e6e9e1c1983a6fe273d6346c4f656dda9a83dfeef959f3d27c975cb3874cc->leave($__internal_7d3e6e9e1c1983a6fe273d6346c4f656dda9a83dfeef959f3d27c975cb3874cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77c512026ca8510e747a5276cd0bdd03c62d1498e8f8c854329446d101133262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c512026ca8510e747a5276cd0bdd03c62d1498e8f8c854329446d101133262->enter($__internal_77c512026ca8510e747a5276cd0bdd03c62d1498e8f8c854329446d101133262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1961c3d557fdc1f26d570f6df9abf7650466bd1dd8420abd0c9424587cc0470d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1961c3d557fdc1f26d570f6df9abf7650466bd1dd8420abd0c9424587cc0470d->enter($__internal_1961c3d557fdc1f26d570f6df9abf7650466bd1dd8420abd0c9424587cc0470d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1961c3d557fdc1f26d570f6df9abf7650466bd1dd8420abd0c9424587cc0470d->leave($__internal_1961c3d557fdc1f26d570f6df9abf7650466bd1dd8420abd0c9424587cc0470d_prof);

        
        $__internal_77c512026ca8510e747a5276cd0bdd03c62d1498e8f8c854329446d101133262->leave($__internal_77c512026ca8510e747a5276cd0bdd03c62d1498e8f8c854329446d101133262_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6d52b67c145e3a34f719fb2f3487cd40e453dc6313920c6f09df87f08e24063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d52b67c145e3a34f719fb2f3487cd40e453dc6313920c6f09df87f08e24063->enter($__internal_f6d52b67c145e3a34f719fb2f3487cd40e453dc6313920c6f09df87f08e24063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_24785afb506a1673319b7d6e552deeb570a0c0cdfd3e773b79f8ec97f29e659f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24785afb506a1673319b7d6e552deeb570a0c0cdfd3e773b79f8ec97f29e659f->enter($__internal_24785afb506a1673319b7d6e552deeb570a0c0cdfd3e773b79f8ec97f29e659f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_24785afb506a1673319b7d6e552deeb570a0c0cdfd3e773b79f8ec97f29e659f->leave($__internal_24785afb506a1673319b7d6e552deeb570a0c0cdfd3e773b79f8ec97f29e659f_prof);

        
        $__internal_f6d52b67c145e3a34f719fb2f3487cd40e453dc6313920c6f09df87f08e24063->leave($__internal_f6d52b67c145e3a34f719fb2f3487cd40e453dc6313920c6f09df87f08e24063_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3601c287bce167e4322e9192bd474fafeb3217f131e9c9afca8e80e4328a0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3601c287bce167e4322e9192bd474fafeb3217f131e9c9afca8e80e4328a0eb->enter($__internal_d3601c287bce167e4322e9192bd474fafeb3217f131e9c9afca8e80e4328a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e65e15d5cbe81d0854e58d8785558306cb42e380e2dd5ac21f6ad9745c6bce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e65e15d5cbe81d0854e58d8785558306cb42e380e2dd5ac21f6ad9745c6bce0->enter($__internal_0e65e15d5cbe81d0854e58d8785558306cb42e380e2dd5ac21f6ad9745c6bce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e65e15d5cbe81d0854e58d8785558306cb42e380e2dd5ac21f6ad9745c6bce0->leave($__internal_0e65e15d5cbe81d0854e58d8785558306cb42e380e2dd5ac21f6ad9745c6bce0_prof);

        
        $__internal_d3601c287bce167e4322e9192bd474fafeb3217f131e9c9afca8e80e4328a0eb->leave($__internal_d3601c287bce167e4322e9192bd474fafeb3217f131e9c9afca8e80e4328a0eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b27568c50366abc6548b874f2329f0e6f21ad58e7a254991f28e15ce9f8c70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b27568c50366abc6548b874f2329f0e6f21ad58e7a254991f28e15ce9f8c70d->enter($__internal_8b27568c50366abc6548b874f2329f0e6f21ad58e7a254991f28e15ce9f8c70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15fc187b690905f0cc5973531cd7377d8897612fe7004213a6cb7fe98cba2ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fc187b690905f0cc5973531cd7377d8897612fe7004213a6cb7fe98cba2ea8->enter($__internal_15fc187b690905f0cc5973531cd7377d8897612fe7004213a6cb7fe98cba2ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15fc187b690905f0cc5973531cd7377d8897612fe7004213a6cb7fe98cba2ea8->leave($__internal_15fc187b690905f0cc5973531cd7377d8897612fe7004213a6cb7fe98cba2ea8_prof);

        
        $__internal_8b27568c50366abc6548b874f2329f0e6f21ad58e7a254991f28e15ce9f8c70d->leave($__internal_8b27568c50366abc6548b874f2329f0e6f21ad58e7a254991f28e15ce9f8c70d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/app/Resources/views/base.html.twig");
    }
}
