<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5ff9df1ce616ad552c126a1bdd90fe68147e05d2ec4ac004a532391901c705a5 extends Twig_Template
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
        $__internal_a78cd1a1a035bafd5cb1a5ed1ece3adc7ce169eb6c3c638a2c1a7110473201ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a78cd1a1a035bafd5cb1a5ed1ece3adc7ce169eb6c3c638a2c1a7110473201ea->enter($__internal_a78cd1a1a035bafd5cb1a5ed1ece3adc7ce169eb6c3c638a2c1a7110473201ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4b8ec302b81e7b5d5cf31a4801e39ed9ce5c558c7a6626118af0073fa6f884c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8ec302b81e7b5d5cf31a4801e39ed9ce5c558c7a6626118af0073fa6f884c9->enter($__internal_4b8ec302b81e7b5d5cf31a4801e39ed9ce5c558c7a6626118af0073fa6f884c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a78cd1a1a035bafd5cb1a5ed1ece3adc7ce169eb6c3c638a2c1a7110473201ea->leave($__internal_a78cd1a1a035bafd5cb1a5ed1ece3adc7ce169eb6c3c638a2c1a7110473201ea_prof);

        
        $__internal_4b8ec302b81e7b5d5cf31a4801e39ed9ce5c558c7a6626118af0073fa6f884c9->leave($__internal_4b8ec302b81e7b5d5cf31a4801e39ed9ce5c558c7a6626118af0073fa6f884c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
