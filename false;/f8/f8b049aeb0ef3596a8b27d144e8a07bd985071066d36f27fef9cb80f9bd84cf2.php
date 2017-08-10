<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c61eb9b37b9e0b265bf8990aea87389ee9f80a983e48f714bab9c04dfe989c33 extends Twig_Template
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
        $__internal_21ef6041d5299e9318ccf23411b8429a67de723f5bbf52cd183bd2c18c6f9a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ef6041d5299e9318ccf23411b8429a67de723f5bbf52cd183bd2c18c6f9a77->enter($__internal_21ef6041d5299e9318ccf23411b8429a67de723f5bbf52cd183bd2c18c6f9a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e995d4f4b3cc56d1c66788196b5cc0b767ffb29c669a226da01113354090362d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e995d4f4b3cc56d1c66788196b5cc0b767ffb29c669a226da01113354090362d->enter($__internal_e995d4f4b3cc56d1c66788196b5cc0b767ffb29c669a226da01113354090362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_21ef6041d5299e9318ccf23411b8429a67de723f5bbf52cd183bd2c18c6f9a77->leave($__internal_21ef6041d5299e9318ccf23411b8429a67de723f5bbf52cd183bd2c18c6f9a77_prof);

        
        $__internal_e995d4f4b3cc56d1c66788196b5cc0b767ffb29c669a226da01113354090362d->leave($__internal_e995d4f4b3cc56d1c66788196b5cc0b767ffb29c669a226da01113354090362d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
