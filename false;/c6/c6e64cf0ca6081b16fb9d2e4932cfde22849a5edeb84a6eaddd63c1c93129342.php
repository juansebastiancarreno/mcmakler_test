<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4cab27983d89c53de2d8a6af1598b5d7cb50bebe08d83820c60e9b78132a0eac extends Twig_Template
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
        $__internal_81e7ec3a923955c4ced4d06fcd6f1265035756cc102ab21ed2a7ad729ec1e7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e7ec3a923955c4ced4d06fcd6f1265035756cc102ab21ed2a7ad729ec1e7ed->enter($__internal_81e7ec3a923955c4ced4d06fcd6f1265035756cc102ab21ed2a7ad729ec1e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_22d3f2a5f7b575693868b2778a820952aa6083931ed07ec90c9e243585ef6f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d3f2a5f7b575693868b2778a820952aa6083931ed07ec90c9e243585ef6f35->enter($__internal_22d3f2a5f7b575693868b2778a820952aa6083931ed07ec90c9e243585ef6f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_81e7ec3a923955c4ced4d06fcd6f1265035756cc102ab21ed2a7ad729ec1e7ed->leave($__internal_81e7ec3a923955c4ced4d06fcd6f1265035756cc102ab21ed2a7ad729ec1e7ed_prof);

        
        $__internal_22d3f2a5f7b575693868b2778a820952aa6083931ed07ec90c9e243585ef6f35->leave($__internal_22d3f2a5f7b575693868b2778a820952aa6083931ed07ec90c9e243585ef6f35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
