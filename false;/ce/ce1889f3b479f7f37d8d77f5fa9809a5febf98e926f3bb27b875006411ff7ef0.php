<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6d15f9de0b4f654412eac9489eaeb30b703197c14d366661f0d5ff99ed8150d9 extends Twig_Template
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
        $__internal_e3bb693ec53a266f8086d0efa16afebd23a091db9e22ad90038353e41a7a35cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3bb693ec53a266f8086d0efa16afebd23a091db9e22ad90038353e41a7a35cd->enter($__internal_e3bb693ec53a266f8086d0efa16afebd23a091db9e22ad90038353e41a7a35cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_967946a4ca7eb752b27cfe8c3e66189e77a9e6d67b78b892708cc2e05ae1acd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967946a4ca7eb752b27cfe8c3e66189e77a9e6d67b78b892708cc2e05ae1acd8->enter($__internal_967946a4ca7eb752b27cfe8c3e66189e77a9e6d67b78b892708cc2e05ae1acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e3bb693ec53a266f8086d0efa16afebd23a091db9e22ad90038353e41a7a35cd->leave($__internal_e3bb693ec53a266f8086d0efa16afebd23a091db9e22ad90038353e41a7a35cd_prof);

        
        $__internal_967946a4ca7eb752b27cfe8c3e66189e77a9e6d67b78b892708cc2e05ae1acd8->leave($__internal_967946a4ca7eb752b27cfe8c3e66189e77a9e6d67b78b892708cc2e05ae1acd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
