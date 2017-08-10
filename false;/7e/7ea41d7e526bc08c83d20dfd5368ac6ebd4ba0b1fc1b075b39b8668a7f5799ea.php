<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a9d51383fba1afbb2c166dab6eae15726b5bf41a3fcfb60a599824d2e5681a8d extends Twig_Template
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
        $__internal_037ca581c9cbf594219093c968063f20a1259af67db5957f8d1023a38bded4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037ca581c9cbf594219093c968063f20a1259af67db5957f8d1023a38bded4a9->enter($__internal_037ca581c9cbf594219093c968063f20a1259af67db5957f8d1023a38bded4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a9acd6fbf597c952897048f8a1694c6bdd09fee78b54dcc55a3a62ff7998f32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9acd6fbf597c952897048f8a1694c6bdd09fee78b54dcc55a3a62ff7998f32e->enter($__internal_a9acd6fbf597c952897048f8a1694c6bdd09fee78b54dcc55a3a62ff7998f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_037ca581c9cbf594219093c968063f20a1259af67db5957f8d1023a38bded4a9->leave($__internal_037ca581c9cbf594219093c968063f20a1259af67db5957f8d1023a38bded4a9_prof);

        
        $__internal_a9acd6fbf597c952897048f8a1694c6bdd09fee78b54dcc55a3a62ff7998f32e->leave($__internal_a9acd6fbf597c952897048f8a1694c6bdd09fee78b54dcc55a3a62ff7998f32e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
