<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7fa8d18d808355ca11b916ab137de26c1c7cffdc6ff10d0a23f03581d1160c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_e6ff4ed14d7de6854896e5fa85b2e8bcf803700e681b7a9934048ff5ee0ae95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ff4ed14d7de6854896e5fa85b2e8bcf803700e681b7a9934048ff5ee0ae95b->enter($__internal_e6ff4ed14d7de6854896e5fa85b2e8bcf803700e681b7a9934048ff5ee0ae95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_45ccc9fdbb060c50d0adf35b28270dd5c1b0e7c1d8e8f17bbd78d8446108a719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ccc9fdbb060c50d0adf35b28270dd5c1b0e7c1d8e8f17bbd78d8446108a719->enter($__internal_45ccc9fdbb060c50d0adf35b28270dd5c1b0e7c1d8e8f17bbd78d8446108a719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6ff4ed14d7de6854896e5fa85b2e8bcf803700e681b7a9934048ff5ee0ae95b->leave($__internal_e6ff4ed14d7de6854896e5fa85b2e8bcf803700e681b7a9934048ff5ee0ae95b_prof);

        
        $__internal_45ccc9fdbb060c50d0adf35b28270dd5c1b0e7c1d8e8f17bbd78d8446108a719->leave($__internal_45ccc9fdbb060c50d0adf35b28270dd5c1b0e7c1d8e8f17bbd78d8446108a719_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb3693e80089b6490b29ff894ce8c9db33c1d12896c13e37fa2b9cf46cae1dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3693e80089b6490b29ff894ce8c9db33c1d12896c13e37fa2b9cf46cae1dc1->enter($__internal_fb3693e80089b6490b29ff894ce8c9db33c1d12896c13e37fa2b9cf46cae1dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_146b7660c4016386166b032ae1e4b1aecdb5f2685482ef98ccdd6156ff6d51af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146b7660c4016386166b032ae1e4b1aecdb5f2685482ef98ccdd6156ff6d51af->enter($__internal_146b7660c4016386166b032ae1e4b1aecdb5f2685482ef98ccdd6156ff6d51af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_146b7660c4016386166b032ae1e4b1aecdb5f2685482ef98ccdd6156ff6d51af->leave($__internal_146b7660c4016386166b032ae1e4b1aecdb5f2685482ef98ccdd6156ff6d51af_prof);

        
        $__internal_fb3693e80089b6490b29ff894ce8c9db33c1d12896c13e37fa2b9cf46cae1dc1->leave($__internal_fb3693e80089b6490b29ff894ce8c9db33c1d12896c13e37fa2b9cf46cae1dc1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
