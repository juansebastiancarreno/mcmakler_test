<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d493dfb0c2e957e283a5a46691edc3732ab30b0331db7f7525b1d72944eb269a extends Twig_Template
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
        $__internal_83c1e002a789fe02117a9ee7233f0cc663a80ce672b898e6d469e3467f30add1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c1e002a789fe02117a9ee7233f0cc663a80ce672b898e6d469e3467f30add1->enter($__internal_83c1e002a789fe02117a9ee7233f0cc663a80ce672b898e6d469e3467f30add1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_16d05b2c2d7349dd6b2eafa9f47173a76b4f086fda993a326b3155d6474f98fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d05b2c2d7349dd6b2eafa9f47173a76b4f086fda993a326b3155d6474f98fe->enter($__internal_16d05b2c2d7349dd6b2eafa9f47173a76b4f086fda993a326b3155d6474f98fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_83c1e002a789fe02117a9ee7233f0cc663a80ce672b898e6d469e3467f30add1->leave($__internal_83c1e002a789fe02117a9ee7233f0cc663a80ce672b898e6d469e3467f30add1_prof);

        
        $__internal_16d05b2c2d7349dd6b2eafa9f47173a76b4f086fda993a326b3155d6474f98fe->leave($__internal_16d05b2c2d7349dd6b2eafa9f47173a76b4f086fda993a326b3155d6474f98fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
