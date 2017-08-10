<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_4bd7e41fa37fbd0be05d594214608c3c953be8291661929a727a8a8a8d391079 extends Twig_Template
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
        $__internal_0874f99aaa16e3dccf50698d3e487f3858b4622f857c1b33023765b3e20d9c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0874f99aaa16e3dccf50698d3e487f3858b4622f857c1b33023765b3e20d9c58->enter($__internal_0874f99aaa16e3dccf50698d3e487f3858b4622f857c1b33023765b3e20d9c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_ba260e663f6faf306e141b73ce3194484e4c1a777aef1ce4efd1c73e3622565e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba260e663f6faf306e141b73ce3194484e4c1a777aef1ce4efd1c73e3622565e->enter($__internal_ba260e663f6faf306e141b73ce3194484e4c1a777aef1ce4efd1c73e3622565e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["response"] ?? $this->getContext($context, "response")), "html", null, true);
        echo "
";
        
        $__internal_0874f99aaa16e3dccf50698d3e487f3858b4622f857c1b33023765b3e20d9c58->leave($__internal_0874f99aaa16e3dccf50698d3e487f3858b4622f857c1b33023765b3e20d9c58_prof);

        
        $__internal_ba260e663f6faf306e141b73ce3194484e4c1a777aef1ce4efd1c73e3622565e->leave($__internal_ba260e663f6faf306e141b73ce3194484e4c1a777aef1ce4efd1c73e3622565e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
        return new Twig_Source("{{response}}
", "AppBundle:Default:index.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
