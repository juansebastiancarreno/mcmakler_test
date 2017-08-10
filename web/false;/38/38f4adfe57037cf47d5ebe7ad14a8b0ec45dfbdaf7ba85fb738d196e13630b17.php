<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6813925682f829fb0c2bf9f2895a1d2d4f6634661238af7877e7baf8291b53ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fcba022041751414f702ec35819c6aff43c0465de74f02f71010ab8bf65940a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcba022041751414f702ec35819c6aff43c0465de74f02f71010ab8bf65940a8->enter($__internal_fcba022041751414f702ec35819c6aff43c0465de74f02f71010ab8bf65940a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a2c51284ba1dc3c5b9c6497c08600e60124676f8eeef733509f07036ac5312f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c51284ba1dc3c5b9c6497c08600e60124676f8eeef733509f07036ac5312f9->enter($__internal_a2c51284ba1dc3c5b9c6497c08600e60124676f8eeef733509f07036ac5312f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcba022041751414f702ec35819c6aff43c0465de74f02f71010ab8bf65940a8->leave($__internal_fcba022041751414f702ec35819c6aff43c0465de74f02f71010ab8bf65940a8_prof);

        
        $__internal_a2c51284ba1dc3c5b9c6497c08600e60124676f8eeef733509f07036ac5312f9->leave($__internal_a2c51284ba1dc3c5b9c6497c08600e60124676f8eeef733509f07036ac5312f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ddeaf84f60c987cbcc36652a149b334ec5b4d87d18d8db57cadf187a4bb134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ddeaf84f60c987cbcc36652a149b334ec5b4d87d18d8db57cadf187a4bb134f->enter($__internal_4ddeaf84f60c987cbcc36652a149b334ec5b4d87d18d8db57cadf187a4bb134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_970197f08b7a2ed6acfd51874df506db4ef541ed98893404117abe693008b5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970197f08b7a2ed6acfd51874df506db4ef541ed98893404117abe693008b5f7->enter($__internal_970197f08b7a2ed6acfd51874df506db4ef541ed98893404117abe693008b5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_970197f08b7a2ed6acfd51874df506db4ef541ed98893404117abe693008b5f7->leave($__internal_970197f08b7a2ed6acfd51874df506db4ef541ed98893404117abe693008b5f7_prof);

        
        $__internal_4ddeaf84f60c987cbcc36652a149b334ec5b4d87d18d8db57cadf187a4bb134f->leave($__internal_4ddeaf84f60c987cbcc36652a149b334ec5b4d87d18d8db57cadf187a4bb134f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca44dd953f8ed8606c37c10c765db592592fca7c0a88f3157a2209ac3b36fb8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca44dd953f8ed8606c37c10c765db592592fca7c0a88f3157a2209ac3b36fb8d->enter($__internal_ca44dd953f8ed8606c37c10c765db592592fca7c0a88f3157a2209ac3b36fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d0d07fbc5674bfe74acda6c009b640220ca28c8d47b64a9b39bbc8e936c136a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0d07fbc5674bfe74acda6c009b640220ca28c8d47b64a9b39bbc8e936c136a->enter($__internal_7d0d07fbc5674bfe74acda6c009b640220ca28c8d47b64a9b39bbc8e936c136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7d0d07fbc5674bfe74acda6c009b640220ca28c8d47b64a9b39bbc8e936c136a->leave($__internal_7d0d07fbc5674bfe74acda6c009b640220ca28c8d47b64a9b39bbc8e936c136a_prof);

        
        $__internal_ca44dd953f8ed8606c37c10c765db592592fca7c0a88f3157a2209ac3b36fb8d->leave($__internal_ca44dd953f8ed8606c37c10c765db592592fca7c0a88f3157a2209ac3b36fb8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_932f571343ea2252df90bcd75ea8a321dc1ba57c861a0e25fbac5ed3658db9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932f571343ea2252df90bcd75ea8a321dc1ba57c861a0e25fbac5ed3658db9e7->enter($__internal_932f571343ea2252df90bcd75ea8a321dc1ba57c861a0e25fbac5ed3658db9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e281d603e680881197c323bfccf02cf329c38b16b6f9e744e240e8c9dade4248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e281d603e680881197c323bfccf02cf329c38b16b6f9e744e240e8c9dade4248->enter($__internal_e281d603e680881197c323bfccf02cf329c38b16b6f9e744e240e8c9dade4248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e281d603e680881197c323bfccf02cf329c38b16b6f9e744e240e8c9dade4248->leave($__internal_e281d603e680881197c323bfccf02cf329c38b16b6f9e744e240e8c9dade4248_prof);

        
        $__internal_932f571343ea2252df90bcd75ea8a321dc1ba57c861a0e25fbac5ed3658db9e7->leave($__internal_932f571343ea2252df90bcd75ea8a321dc1ba57c861a0e25fbac5ed3658db9e7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
