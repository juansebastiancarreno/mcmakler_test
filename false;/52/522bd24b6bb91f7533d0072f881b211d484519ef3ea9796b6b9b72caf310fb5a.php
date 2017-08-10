<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9d2266a5690dc50f108f19cfe2161b452ad91bc65fc0058bd63f3fee87d63978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c21379dd9ddad8eda89000ba787cd33f60c0082f24f058a48102cfd42e97223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c21379dd9ddad8eda89000ba787cd33f60c0082f24f058a48102cfd42e97223->enter($__internal_6c21379dd9ddad8eda89000ba787cd33f60c0082f24f058a48102cfd42e97223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c4440442f023dbfcc37cc6521508aebdb5c0e24b6e6e8e78fa92a8b44ca2a47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4440442f023dbfcc37cc6521508aebdb5c0e24b6e6e8e78fa92a8b44ca2a47c->enter($__internal_c4440442f023dbfcc37cc6521508aebdb5c0e24b6e6e8e78fa92a8b44ca2a47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c21379dd9ddad8eda89000ba787cd33f60c0082f24f058a48102cfd42e97223->leave($__internal_6c21379dd9ddad8eda89000ba787cd33f60c0082f24f058a48102cfd42e97223_prof);

        
        $__internal_c4440442f023dbfcc37cc6521508aebdb5c0e24b6e6e8e78fa92a8b44ca2a47c->leave($__internal_c4440442f023dbfcc37cc6521508aebdb5c0e24b6e6e8e78fa92a8b44ca2a47c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea911ade5a8d64abe00599a4646c95a21fb41fac5857e7263ad00406c81a1249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea911ade5a8d64abe00599a4646c95a21fb41fac5857e7263ad00406c81a1249->enter($__internal_ea911ade5a8d64abe00599a4646c95a21fb41fac5857e7263ad00406c81a1249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f8b2c690c579a1823796908a7ead5ab3eaa1230b7020720af8918a5316fecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f8b2c690c579a1823796908a7ead5ab3eaa1230b7020720af8918a5316fecc5->enter($__internal_7f8b2c690c579a1823796908a7ead5ab3eaa1230b7020720af8918a5316fecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7f8b2c690c579a1823796908a7ead5ab3eaa1230b7020720af8918a5316fecc5->leave($__internal_7f8b2c690c579a1823796908a7ead5ab3eaa1230b7020720af8918a5316fecc5_prof);

        
        $__internal_ea911ade5a8d64abe00599a4646c95a21fb41fac5857e7263ad00406c81a1249->leave($__internal_ea911ade5a8d64abe00599a4646c95a21fb41fac5857e7263ad00406c81a1249_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfaf848832e255b20503f227b37a5394026e720f460fd033780bd65d142aa39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfaf848832e255b20503f227b37a5394026e720f460fd033780bd65d142aa39f->enter($__internal_dfaf848832e255b20503f227b37a5394026e720f460fd033780bd65d142aa39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_163edcd0352a0cbc9da58097141153540b4110dc85fe167f7d9c889f5dbcec5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163edcd0352a0cbc9da58097141153540b4110dc85fe167f7d9c889f5dbcec5d->enter($__internal_163edcd0352a0cbc9da58097141153540b4110dc85fe167f7d9c889f5dbcec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_163edcd0352a0cbc9da58097141153540b4110dc85fe167f7d9c889f5dbcec5d->leave($__internal_163edcd0352a0cbc9da58097141153540b4110dc85fe167f7d9c889f5dbcec5d_prof);

        
        $__internal_dfaf848832e255b20503f227b37a5394026e720f460fd033780bd65d142aa39f->leave($__internal_dfaf848832e255b20503f227b37a5394026e720f460fd033780bd65d142aa39f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
