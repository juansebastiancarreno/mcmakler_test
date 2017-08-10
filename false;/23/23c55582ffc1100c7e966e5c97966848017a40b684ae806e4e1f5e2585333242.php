<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bb5e9f600ff1e0342fd79375e81d3a6fee49196f02f2d52f876bcc6fa15a55c5 extends Twig_Template
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
        $__internal_4e5ec6cdb3eb8e378d5ce84a1d473364faa1020e7cacadd30c3446c3d0aac35d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5ec6cdb3eb8e378d5ce84a1d473364faa1020e7cacadd30c3446c3d0aac35d->enter($__internal_4e5ec6cdb3eb8e378d5ce84a1d473364faa1020e7cacadd30c3446c3d0aac35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_89ccacb867c1a046263c535af583e3b3d573a2ff3f766e5f5b442ae02686874a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ccacb867c1a046263c535af583e3b3d573a2ff3f766e5f5b442ae02686874a->enter($__internal_89ccacb867c1a046263c535af583e3b3d573a2ff3f766e5f5b442ae02686874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4e5ec6cdb3eb8e378d5ce84a1d473364faa1020e7cacadd30c3446c3d0aac35d->leave($__internal_4e5ec6cdb3eb8e378d5ce84a1d473364faa1020e7cacadd30c3446c3d0aac35d_prof);

        
        $__internal_89ccacb867c1a046263c535af583e3b3d573a2ff3f766e5f5b442ae02686874a->leave($__internal_89ccacb867c1a046263c535af583e3b3d573a2ff3f766e5f5b442ae02686874a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
