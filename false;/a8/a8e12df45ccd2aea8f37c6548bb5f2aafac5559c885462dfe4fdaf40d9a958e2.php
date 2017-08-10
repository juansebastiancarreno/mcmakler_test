<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_68f6fff72d1a2afe546cb3502dec15b387c4e3cb8af907e5dacd299aaf75c86e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5d65d59f2a3341e11c044b5c3b0c47f9028d13ed2b5cec473570fb1ddde5a8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d65d59f2a3341e11c044b5c3b0c47f9028d13ed2b5cec473570fb1ddde5a8b1->enter($__internal_5d65d59f2a3341e11c044b5c3b0c47f9028d13ed2b5cec473570fb1ddde5a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_fd92a64ae2831b655da9a3f70ea3d81cec86250669c156f55461e7f49ea8679d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd92a64ae2831b655da9a3f70ea3d81cec86250669c156f55461e7f49ea8679d->enter($__internal_fd92a64ae2831b655da9a3f70ea3d81cec86250669c156f55461e7f49ea8679d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d65d59f2a3341e11c044b5c3b0c47f9028d13ed2b5cec473570fb1ddde5a8b1->leave($__internal_5d65d59f2a3341e11c044b5c3b0c47f9028d13ed2b5cec473570fb1ddde5a8b1_prof);

        
        $__internal_fd92a64ae2831b655da9a3f70ea3d81cec86250669c156f55461e7f49ea8679d->leave($__internal_fd92a64ae2831b655da9a3f70ea3d81cec86250669c156f55461e7f49ea8679d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff70ffd77decd96be8d626db79fbc494866a0146361944a8e15ba7c95b7ca85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff70ffd77decd96be8d626db79fbc494866a0146361944a8e15ba7c95b7ca85a->enter($__internal_ff70ffd77decd96be8d626db79fbc494866a0146361944a8e15ba7c95b7ca85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7affb3f2ff7e6b7f8de3fc5242dba02f4961b0096313cec0b1f1d69bcc45f569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7affb3f2ff7e6b7f8de3fc5242dba02f4961b0096313cec0b1f1d69bcc45f569->enter($__internal_7affb3f2ff7e6b7f8de3fc5242dba02f4961b0096313cec0b1f1d69bcc45f569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7affb3f2ff7e6b7f8de3fc5242dba02f4961b0096313cec0b1f1d69bcc45f569->leave($__internal_7affb3f2ff7e6b7f8de3fc5242dba02f4961b0096313cec0b1f1d69bcc45f569_prof);

        
        $__internal_ff70ffd77decd96be8d626db79fbc494866a0146361944a8e15ba7c95b7ca85a->leave($__internal_ff70ffd77decd96be8d626db79fbc494866a0146361944a8e15ba7c95b7ca85a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e4b35fa9ceca56aebc4fc5faf0009f9ee3521036d8a5d2b1e2bf150523dbf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4b35fa9ceca56aebc4fc5faf0009f9ee3521036d8a5d2b1e2bf150523dbf0f->enter($__internal_7e4b35fa9ceca56aebc4fc5faf0009f9ee3521036d8a5d2b1e2bf150523dbf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41f32ccd0a29ddcd669bee6ef60ed1bf6b706c814aa107d04f379ac19a74af38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f32ccd0a29ddcd669bee6ef60ed1bf6b706c814aa107d04f379ac19a74af38->enter($__internal_41f32ccd0a29ddcd669bee6ef60ed1bf6b706c814aa107d04f379ac19a74af38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41f32ccd0a29ddcd669bee6ef60ed1bf6b706c814aa107d04f379ac19a74af38->leave($__internal_41f32ccd0a29ddcd669bee6ef60ed1bf6b706c814aa107d04f379ac19a74af38_prof);

        
        $__internal_7e4b35fa9ceca56aebc4fc5faf0009f9ee3521036d8a5d2b1e2bf150523dbf0f->leave($__internal_7e4b35fa9ceca56aebc4fc5faf0009f9ee3521036d8a5d2b1e2bf150523dbf0f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65b7cbd3674e14a561af3b4b8ab5f7991e0c90439aa313a59f0799dc0a7e3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b7cbd3674e14a561af3b4b8ab5f7991e0c90439aa313a59f0799dc0a7e3bae->enter($__internal_65b7cbd3674e14a561af3b4b8ab5f7991e0c90439aa313a59f0799dc0a7e3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c13a3537e6949f5543950b4f90d7f33402152af3059d2421810c02ff024b1da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13a3537e6949f5543950b4f90d7f33402152af3059d2421810c02ff024b1da3->enter($__internal_c13a3537e6949f5543950b4f90d7f33402152af3059d2421810c02ff024b1da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c13a3537e6949f5543950b4f90d7f33402152af3059d2421810c02ff024b1da3->leave($__internal_c13a3537e6949f5543950b4f90d7f33402152af3059d2421810c02ff024b1da3_prof);

        
        $__internal_65b7cbd3674e14a561af3b4b8ab5f7991e0c90439aa313a59f0799dc0a7e3bae->leave($__internal_65b7cbd3674e14a561af3b4b8ab5f7991e0c90439aa313a59f0799dc0a7e3bae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
