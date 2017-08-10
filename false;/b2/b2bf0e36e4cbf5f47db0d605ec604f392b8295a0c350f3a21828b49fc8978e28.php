<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b14f90937c194941261bb746e9010efa04f97befcadf3eda8717b30977bf2d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dc17c79a9f5d3e9a85aabe0ede1ba67f53fb5c80d9d0ec84dc4e6eca65c502e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc17c79a9f5d3e9a85aabe0ede1ba67f53fb5c80d9d0ec84dc4e6eca65c502e->enter($__internal_4dc17c79a9f5d3e9a85aabe0ede1ba67f53fb5c80d9d0ec84dc4e6eca65c502e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_588958c4389aef2d24b64809bf14c082f56fbc2411808421efbd45e002c24e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588958c4389aef2d24b64809bf14c082f56fbc2411808421efbd45e002c24e1f->enter($__internal_588958c4389aef2d24b64809bf14c082f56fbc2411808421efbd45e002c24e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dc17c79a9f5d3e9a85aabe0ede1ba67f53fb5c80d9d0ec84dc4e6eca65c502e->leave($__internal_4dc17c79a9f5d3e9a85aabe0ede1ba67f53fb5c80d9d0ec84dc4e6eca65c502e_prof);

        
        $__internal_588958c4389aef2d24b64809bf14c082f56fbc2411808421efbd45e002c24e1f->leave($__internal_588958c4389aef2d24b64809bf14c082f56fbc2411808421efbd45e002c24e1f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bc952508cb23924d2758ba2d7457a362c74e8b5bad3e8f321429053d43ee70d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc952508cb23924d2758ba2d7457a362c74e8b5bad3e8f321429053d43ee70d8->enter($__internal_bc952508cb23924d2758ba2d7457a362c74e8b5bad3e8f321429053d43ee70d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ebd13e0a137d3714f32b423a75978f1dc7624a9bd04d4fb1efa88cf10b3e8789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd13e0a137d3714f32b423a75978f1dc7624a9bd04d4fb1efa88cf10b3e8789->enter($__internal_ebd13e0a137d3714f32b423a75978f1dc7624a9bd04d4fb1efa88cf10b3e8789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ebd13e0a137d3714f32b423a75978f1dc7624a9bd04d4fb1efa88cf10b3e8789->leave($__internal_ebd13e0a137d3714f32b423a75978f1dc7624a9bd04d4fb1efa88cf10b3e8789_prof);

        
        $__internal_bc952508cb23924d2758ba2d7457a362c74e8b5bad3e8f321429053d43ee70d8->leave($__internal_bc952508cb23924d2758ba2d7457a362c74e8b5bad3e8f321429053d43ee70d8_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d22bba688dd5bf03b03b7d1fe94babc00e964ed248402816b3781739d0ac456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d22bba688dd5bf03b03b7d1fe94babc00e964ed248402816b3781739d0ac456->enter($__internal_8d22bba688dd5bf03b03b7d1fe94babc00e964ed248402816b3781739d0ac456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b4a6821292cc6a61ac5730400f689cf4ce256f7cc164635ebe53a58b5bf8b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4a6821292cc6a61ac5730400f689cf4ce256f7cc164635ebe53a58b5bf8b65->enter($__internal_8b4a6821292cc6a61ac5730400f689cf4ce256f7cc164635ebe53a58b5bf8b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8b4a6821292cc6a61ac5730400f689cf4ce256f7cc164635ebe53a58b5bf8b65->leave($__internal_8b4a6821292cc6a61ac5730400f689cf4ce256f7cc164635ebe53a58b5bf8b65_prof);

        
        $__internal_8d22bba688dd5bf03b03b7d1fe94babc00e964ed248402816b3781739d0ac456->leave($__internal_8d22bba688dd5bf03b03b7d1fe94babc00e964ed248402816b3781739d0ac456_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
