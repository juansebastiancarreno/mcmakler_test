<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_28ba1321d40370eb0b5d498fc563da37861f47916a9d1a77a59afd47f4fa0271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a19d90b9f957c63a54700edd043486d7d2affae067fb9c8e61675e5c564d2e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19d90b9f957c63a54700edd043486d7d2affae067fb9c8e61675e5c564d2e60->enter($__internal_a19d90b9f957c63a54700edd043486d7d2affae067fb9c8e61675e5c564d2e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2f6f7434a03d25eb9e581ffc9babc5138d9639b0540a39b4fa743a96880d69be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6f7434a03d25eb9e581ffc9babc5138d9639b0540a39b4fa743a96880d69be->enter($__internal_2f6f7434a03d25eb9e581ffc9babc5138d9639b0540a39b4fa743a96880d69be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a19d90b9f957c63a54700edd043486d7d2affae067fb9c8e61675e5c564d2e60->leave($__internal_a19d90b9f957c63a54700edd043486d7d2affae067fb9c8e61675e5c564d2e60_prof);

        
        $__internal_2f6f7434a03d25eb9e581ffc9babc5138d9639b0540a39b4fa743a96880d69be->leave($__internal_2f6f7434a03d25eb9e581ffc9babc5138d9639b0540a39b4fa743a96880d69be_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
