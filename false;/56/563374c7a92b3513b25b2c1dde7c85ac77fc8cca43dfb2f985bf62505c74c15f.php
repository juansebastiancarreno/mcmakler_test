<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_4bd7e41fa37fbd0be05d594214608c3c953be8291661929a727a8a8a8d391079 extends Twig_Template
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
        $__internal_d8c42a9aa6c0b713b6ba8d6b31ef8000bafac09546031952310636a018f1e190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c42a9aa6c0b713b6ba8d6b31ef8000bafac09546031952310636a018f1e190->enter($__internal_d8c42a9aa6c0b713b6ba8d6b31ef8000bafac09546031952310636a018f1e190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_6d724fa07c9ee0779bbd4d764c3ace4f20d2ae2c0e1c2371726cab07def9e9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d724fa07c9ee0779bbd4d764c3ace4f20d2ae2c0e1c2371726cab07def9e9a8->enter($__internal_6d724fa07c9ee0779bbd4d764c3ace4f20d2ae2c0e1c2371726cab07def9e9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["response"] ?? $this->getContext($context, "response")), "html", null, true);
        echo "
";
        
        $__internal_d8c42a9aa6c0b713b6ba8d6b31ef8000bafac09546031952310636a018f1e190->leave($__internal_d8c42a9aa6c0b713b6ba8d6b31ef8000bafac09546031952310636a018f1e190_prof);

        
        $__internal_6d724fa07c9ee0779bbd4d764c3ace4f20d2ae2c0e1c2371726cab07def9e9a8->leave($__internal_6d724fa07c9ee0779bbd4d764c3ace4f20d2ae2c0e1c2371726cab07def9e9a8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{response}}
", "AppBundle:Default:index.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
