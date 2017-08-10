<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_68f6fff72d1a2afe546cb3502dec15b387c4e3cb8af907e5dacd299aaf75c86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_254b65f2c5d312a0155673511898111a301102e736a70fea92817a3ecf5770f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254b65f2c5d312a0155673511898111a301102e736a70fea92817a3ecf5770f5->enter($__internal_254b65f2c5d312a0155673511898111a301102e736a70fea92817a3ecf5770f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34b372a809139b959f7fe38bd0ed8e8826fecf5a6f761cacc50ce61e04e7a827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b372a809139b959f7fe38bd0ed8e8826fecf5a6f761cacc50ce61e04e7a827->enter($__internal_34b372a809139b959f7fe38bd0ed8e8826fecf5a6f761cacc50ce61e04e7a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254b65f2c5d312a0155673511898111a301102e736a70fea92817a3ecf5770f5->leave($__internal_254b65f2c5d312a0155673511898111a301102e736a70fea92817a3ecf5770f5_prof);

        
        $__internal_34b372a809139b959f7fe38bd0ed8e8826fecf5a6f761cacc50ce61e04e7a827->leave($__internal_34b372a809139b959f7fe38bd0ed8e8826fecf5a6f761cacc50ce61e04e7a827_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae03a87d8a61b4d6cf079b4000326048a4ff8462af733d8f4c1f021d08f4fda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae03a87d8a61b4d6cf079b4000326048a4ff8462af733d8f4c1f021d08f4fda6->enter($__internal_ae03a87d8a61b4d6cf079b4000326048a4ff8462af733d8f4c1f021d08f4fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5771ae82c50f05670d5fce2af50bdec61fa6ddc31cd4d563248c7e3ba709afb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5771ae82c50f05670d5fce2af50bdec61fa6ddc31cd4d563248c7e3ba709afb1->enter($__internal_5771ae82c50f05670d5fce2af50bdec61fa6ddc31cd4d563248c7e3ba709afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5771ae82c50f05670d5fce2af50bdec61fa6ddc31cd4d563248c7e3ba709afb1->leave($__internal_5771ae82c50f05670d5fce2af50bdec61fa6ddc31cd4d563248c7e3ba709afb1_prof);

        
        $__internal_ae03a87d8a61b4d6cf079b4000326048a4ff8462af733d8f4c1f021d08f4fda6->leave($__internal_ae03a87d8a61b4d6cf079b4000326048a4ff8462af733d8f4c1f021d08f4fda6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f75c7b658aff6e217b0bd44ab4dd94657da6236b22d4a4af42b586b7e0ca07e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f75c7b658aff6e217b0bd44ab4dd94657da6236b22d4a4af42b586b7e0ca07e3->enter($__internal_f75c7b658aff6e217b0bd44ab4dd94657da6236b22d4a4af42b586b7e0ca07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f68c80ab80fcc52913b4023cc024f18fb35e6fa17722cdcb285b6b565cb94b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f68c80ab80fcc52913b4023cc024f18fb35e6fa17722cdcb285b6b565cb94b9->enter($__internal_6f68c80ab80fcc52913b4023cc024f18fb35e6fa17722cdcb285b6b565cb94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f68c80ab80fcc52913b4023cc024f18fb35e6fa17722cdcb285b6b565cb94b9->leave($__internal_6f68c80ab80fcc52913b4023cc024f18fb35e6fa17722cdcb285b6b565cb94b9_prof);

        
        $__internal_f75c7b658aff6e217b0bd44ab4dd94657da6236b22d4a4af42b586b7e0ca07e3->leave($__internal_f75c7b658aff6e217b0bd44ab4dd94657da6236b22d4a4af42b586b7e0ca07e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19820cc94f43a3dcc846ff4957d827b226e9e6d1a77320aba4305e9b16bf2d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19820cc94f43a3dcc846ff4957d827b226e9e6d1a77320aba4305e9b16bf2d25->enter($__internal_19820cc94f43a3dcc846ff4957d827b226e9e6d1a77320aba4305e9b16bf2d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42cb67a82fedd61da50ff443ada9080c509834d07cbbcf167d58c873df2058fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cb67a82fedd61da50ff443ada9080c509834d07cbbcf167d58c873df2058fa->enter($__internal_42cb67a82fedd61da50ff443ada9080c509834d07cbbcf167d58c873df2058fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42cb67a82fedd61da50ff443ada9080c509834d07cbbcf167d58c873df2058fa->leave($__internal_42cb67a82fedd61da50ff443ada9080c509834d07cbbcf167d58c873df2058fa_prof);

        
        $__internal_19820cc94f43a3dcc846ff4957d827b226e9e6d1a77320aba4305e9b16bf2d25->leave($__internal_19820cc94f43a3dcc846ff4957d827b226e9e6d1a77320aba4305e9b16bf2d25_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
