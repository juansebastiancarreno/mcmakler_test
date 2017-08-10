<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7fa8d18d808355ca11b916ab137de26c1c7cffdc6ff10d0a23f03581d1160c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2396df4a520351db28a8b63ce393b0daa6581004c50b065b6e18233f7c2b8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2396df4a520351db28a8b63ce393b0daa6581004c50b065b6e18233f7c2b8a4->enter($__internal_f2396df4a520351db28a8b63ce393b0daa6581004c50b065b6e18233f7c2b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4dc2cfc24ebc0dd34ebad58565c977a49d8c9931405ef1d8e1fd9aa0cbd4b3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc2cfc24ebc0dd34ebad58565c977a49d8c9931405ef1d8e1fd9aa0cbd4b3e9->enter($__internal_4dc2cfc24ebc0dd34ebad58565c977a49d8c9931405ef1d8e1fd9aa0cbd4b3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2396df4a520351db28a8b63ce393b0daa6581004c50b065b6e18233f7c2b8a4->leave($__internal_f2396df4a520351db28a8b63ce393b0daa6581004c50b065b6e18233f7c2b8a4_prof);

        
        $__internal_4dc2cfc24ebc0dd34ebad58565c977a49d8c9931405ef1d8e1fd9aa0cbd4b3e9->leave($__internal_4dc2cfc24ebc0dd34ebad58565c977a49d8c9931405ef1d8e1fd9aa0cbd4b3e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_155135e7b6e65680472099c326eb7616fd5530e5c69326b45d7dd80806de7bf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155135e7b6e65680472099c326eb7616fd5530e5c69326b45d7dd80806de7bf9->enter($__internal_155135e7b6e65680472099c326eb7616fd5530e5c69326b45d7dd80806de7bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8186edbf60a963a92a99c48f9b80b03d1b9883b0ff1d18f6ca8897e3e6537088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8186edbf60a963a92a99c48f9b80b03d1b9883b0ff1d18f6ca8897e3e6537088->enter($__internal_8186edbf60a963a92a99c48f9b80b03d1b9883b0ff1d18f6ca8897e3e6537088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8186edbf60a963a92a99c48f9b80b03d1b9883b0ff1d18f6ca8897e3e6537088->leave($__internal_8186edbf60a963a92a99c48f9b80b03d1b9883b0ff1d18f6ca8897e3e6537088_prof);

        
        $__internal_155135e7b6e65680472099c326eb7616fd5530e5c69326b45d7dd80806de7bf9->leave($__internal_155135e7b6e65680472099c326eb7616fd5530e5c69326b45d7dd80806de7bf9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
