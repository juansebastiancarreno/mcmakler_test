<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5b6a09f8f54ab9dc189a407966b0171a3466ec1565bc7e32079800ca3038bee2 extends Twig_Template
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
        $__internal_001398e6aee4f1bda889a112e348fff4ba890f37186982c0360cd7387b2a096e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001398e6aee4f1bda889a112e348fff4ba890f37186982c0360cd7387b2a096e->enter($__internal_001398e6aee4f1bda889a112e348fff4ba890f37186982c0360cd7387b2a096e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_cc4944629ddb3c10ecd9d8f62b5f790f0bad79e1f4916a13800b52dc0be6ea7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4944629ddb3c10ecd9d8f62b5f790f0bad79e1f4916a13800b52dc0be6ea7e->enter($__internal_cc4944629ddb3c10ecd9d8f62b5f790f0bad79e1f4916a13800b52dc0be6ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_001398e6aee4f1bda889a112e348fff4ba890f37186982c0360cd7387b2a096e->leave($__internal_001398e6aee4f1bda889a112e348fff4ba890f37186982c0360cd7387b2a096e_prof);

        
        $__internal_cc4944629ddb3c10ecd9d8f62b5f790f0bad79e1f4916a13800b52dc0be6ea7e->leave($__internal_cc4944629ddb3c10ecd9d8f62b5f790f0bad79e1f4916a13800b52dc0be6ea7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
