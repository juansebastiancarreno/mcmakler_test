<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e3708391592e57b8912865e66f881fcdd4cdb8a9d4732642d78ecd1558842737 extends Twig_Template
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
        $__internal_0376aaae5828b2ba073b3cb3cdc409ceefb5ed93eb49a8e5067d4013e26aebbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0376aaae5828b2ba073b3cb3cdc409ceefb5ed93eb49a8e5067d4013e26aebbc->enter($__internal_0376aaae5828b2ba073b3cb3cdc409ceefb5ed93eb49a8e5067d4013e26aebbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ba0bd70aaffabd9790f43b24bdeb37d30c86529528bb9a8d2215214af58e57cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0bd70aaffabd9790f43b24bdeb37d30c86529528bb9a8d2215214af58e57cb->enter($__internal_ba0bd70aaffabd9790f43b24bdeb37d30c86529528bb9a8d2215214af58e57cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0376aaae5828b2ba073b3cb3cdc409ceefb5ed93eb49a8e5067d4013e26aebbc->leave($__internal_0376aaae5828b2ba073b3cb3cdc409ceefb5ed93eb49a8e5067d4013e26aebbc_prof);

        
        $__internal_ba0bd70aaffabd9790f43b24bdeb37d30c86529528bb9a8d2215214af58e57cb->leave($__internal_ba0bd70aaffabd9790f43b24bdeb37d30c86529528bb9a8d2215214af58e57cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
