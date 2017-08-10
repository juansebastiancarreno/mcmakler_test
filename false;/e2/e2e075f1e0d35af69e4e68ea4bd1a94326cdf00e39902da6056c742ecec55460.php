<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c29a57e6b1ffc71c1da3d5f2ea95d361ce91d5bf5e57a522d0821414f6e22c43 extends Twig_Template
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
        $__internal_43747c4a4312d02905cb78308bf69c02858b1a00f5d13b8d89d0b0c5136be304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43747c4a4312d02905cb78308bf69c02858b1a00f5d13b8d89d0b0c5136be304->enter($__internal_43747c4a4312d02905cb78308bf69c02858b1a00f5d13b8d89d0b0c5136be304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_23149e9fae6758c18472f55b864132b3194f386a0b8c9e97dafc5ad60c8c8aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23149e9fae6758c18472f55b864132b3194f386a0b8c9e97dafc5ad60c8c8aeb->enter($__internal_23149e9fae6758c18472f55b864132b3194f386a0b8c9e97dafc5ad60c8c8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_43747c4a4312d02905cb78308bf69c02858b1a00f5d13b8d89d0b0c5136be304->leave($__internal_43747c4a4312d02905cb78308bf69c02858b1a00f5d13b8d89d0b0c5136be304_prof);

        
        $__internal_23149e9fae6758c18472f55b864132b3194f386a0b8c9e97dafc5ad60c8c8aeb->leave($__internal_23149e9fae6758c18472f55b864132b3194f386a0b8c9e97dafc5ad60c8c8aeb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
