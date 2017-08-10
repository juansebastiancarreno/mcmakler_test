<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_60f5fe91ac5281ea77849db950c7ac3bb55f8158e567e333341969aacfe8c76f extends Twig_Template
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
        $__internal_95021f144aeabdf39d04194a8ed171289a7c83b2cd26e1fc2ba17442765a2f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95021f144aeabdf39d04194a8ed171289a7c83b2cd26e1fc2ba17442765a2f5f->enter($__internal_95021f144aeabdf39d04194a8ed171289a7c83b2cd26e1fc2ba17442765a2f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_457769d8c6382e314c1f007def4f9572f49286e0e514a088e1ab2abfea0b0d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457769d8c6382e314c1f007def4f9572f49286e0e514a088e1ab2abfea0b0d92->enter($__internal_457769d8c6382e314c1f007def4f9572f49286e0e514a088e1ab2abfea0b0d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_95021f144aeabdf39d04194a8ed171289a7c83b2cd26e1fc2ba17442765a2f5f->leave($__internal_95021f144aeabdf39d04194a8ed171289a7c83b2cd26e1fc2ba17442765a2f5f_prof);

        
        $__internal_457769d8c6382e314c1f007def4f9572f49286e0e514a088e1ab2abfea0b0d92->leave($__internal_457769d8c6382e314c1f007def4f9572f49286e0e514a088e1ab2abfea0b0d92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
