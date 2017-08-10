<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a21cf100dfc6654a21bf806791c991e8647d37067789f6e2137b627156fcafab extends Twig_Template
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
        $__internal_4060b30b9f18f5b24398ed2a0e474beb0ee47318e82739493c457155a4b3f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4060b30b9f18f5b24398ed2a0e474beb0ee47318e82739493c457155a4b3f62e->enter($__internal_4060b30b9f18f5b24398ed2a0e474beb0ee47318e82739493c457155a4b3f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2092596708d390ec291c9ce6fd6a95f655a772a8ae5eaf8b9e98807c242209f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2092596708d390ec291c9ce6fd6a95f655a772a8ae5eaf8b9e98807c242209f1->enter($__internal_2092596708d390ec291c9ce6fd6a95f655a772a8ae5eaf8b9e98807c242209f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_4060b30b9f18f5b24398ed2a0e474beb0ee47318e82739493c457155a4b3f62e->leave($__internal_4060b30b9f18f5b24398ed2a0e474beb0ee47318e82739493c457155a4b3f62e_prof);

        
        $__internal_2092596708d390ec291c9ce6fd6a95f655a772a8ae5eaf8b9e98807c242209f1->leave($__internal_2092596708d390ec291c9ce6fd6a95f655a772a8ae5eaf8b9e98807c242209f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
