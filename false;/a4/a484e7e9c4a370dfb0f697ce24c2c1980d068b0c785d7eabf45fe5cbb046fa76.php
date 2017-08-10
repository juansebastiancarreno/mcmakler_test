<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_98911a84b4dd13d916f8e97a3bff63238d0986ab765f526aa30973963e3ebf40 extends Twig_Template
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
        $__internal_95da6980f105a790fc95838748d8b21aa204ef4cef4f20250a61711166eefc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95da6980f105a790fc95838748d8b21aa204ef4cef4f20250a61711166eefc75->enter($__internal_95da6980f105a790fc95838748d8b21aa204ef4cef4f20250a61711166eefc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1cec9c7e24696714eba0e683e69ea6bf5d16aafbc24b1096eb28c47c841e95a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cec9c7e24696714eba0e683e69ea6bf5d16aafbc24b1096eb28c47c841e95a5->enter($__internal_1cec9c7e24696714eba0e683e69ea6bf5d16aafbc24b1096eb28c47c841e95a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_95da6980f105a790fc95838748d8b21aa204ef4cef4f20250a61711166eefc75->leave($__internal_95da6980f105a790fc95838748d8b21aa204ef4cef4f20250a61711166eefc75_prof);

        
        $__internal_1cec9c7e24696714eba0e683e69ea6bf5d16aafbc24b1096eb28c47c841e95a5->leave($__internal_1cec9c7e24696714eba0e683e69ea6bf5d16aafbc24b1096eb28c47c841e95a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
