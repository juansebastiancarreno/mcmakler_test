<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_7a78c05e5e85e8110d43bae5f407907f125abaffd7f0733efde2d6dc8bfff5a9 extends Twig_Template
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
        $__internal_ee22e9de51ec9893360c3a12029885e258244894533a64273e807339c5c1ad05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee22e9de51ec9893360c3a12029885e258244894533a64273e807339c5c1ad05->enter($__internal_ee22e9de51ec9893360c3a12029885e258244894533a64273e807339c5c1ad05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_e0c7a4e9b366c40a14110693daa4db12c7e12fe9b61e950461fedcb2b7a73c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c7a4e9b366c40a14110693daa4db12c7e12fe9b61e950461fedcb2b7a73c98->enter($__internal_e0c7a4e9b366c40a14110693daa4db12c7e12fe9b61e950461fedcb2b7a73c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_ee22e9de51ec9893360c3a12029885e258244894533a64273e807339c5c1ad05->leave($__internal_ee22e9de51ec9893360c3a12029885e258244894533a64273e807339c5c1ad05_prof);

        
        $__internal_e0c7a4e9b366c40a14110693daa4db12c7e12fe9b61e950461fedcb2b7a73c98->leave($__internal_e0c7a4e9b366c40a14110693daa4db12c7e12fe9b61e950461fedcb2b7a73c98_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
