<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_713036c99850ac814f07523faa7894b1ebf9e9be45be37f39d0c428d1cba23aa extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, ($context["response"] ?? null), "html", null, true);
        echo "
";
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
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:index.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/src/AppBundle/Resources/views/Default/index.html.twig");
    }
}
