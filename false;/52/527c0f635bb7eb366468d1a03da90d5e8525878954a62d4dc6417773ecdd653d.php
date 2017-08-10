<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_badb4d4bdddf875e188d90e6275b30d707dd9459117db1453ccf2a539780f617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0b31aafb3ea3318042ef6730fd421ad79405077741bca02930ae9dcfd357022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b31aafb3ea3318042ef6730fd421ad79405077741bca02930ae9dcfd357022->enter($__internal_e0b31aafb3ea3318042ef6730fd421ad79405077741bca02930ae9dcfd357022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $__internal_f33b2226edeaa8f7e9afbf757b1fecdd49457a3a2cc0aba8858f3b577336b067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33b2226edeaa8f7e9afbf757b1fecdd49457a3a2cc0aba8858f3b577336b067->enter($__internal_f33b2226edeaa8f7e9afbf757b1fecdd49457a3a2cc0aba8858f3b577336b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b31aafb3ea3318042ef6730fd421ad79405077741bca02930ae9dcfd357022->leave($__internal_e0b31aafb3ea3318042ef6730fd421ad79405077741bca02930ae9dcfd357022_prof);

        
        $__internal_f33b2226edeaa8f7e9afbf757b1fecdd49457a3a2cc0aba8858f3b577336b067->leave($__internal_f33b2226edeaa8f7e9afbf757b1fecdd49457a3a2cc0aba8858f3b577336b067_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_548402cf210c678f2af9ba4aa39712d8e66556017c0a46edd95331e2b1255e0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548402cf210c678f2af9ba4aa39712d8e66556017c0a46edd95331e2b1255e0d->enter($__internal_548402cf210c678f2af9ba4aa39712d8e66556017c0a46edd95331e2b1255e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_15179e73980257b933ecbb781ee57dda0975d2ac99101dcb9db1d2b76c61b03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15179e73980257b933ecbb781ee57dda0975d2ac99101dcb9db1d2b76c61b03d->enter($__internal_15179e73980257b933ecbb781ee57dda0975d2ac99101dcb9db1d2b76c61b03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queryCount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMongoDB/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 22
            echo "        ";
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 22)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")))));
            // line 23
            echo "    ";
        }
        
        $__internal_15179e73980257b933ecbb781ee57dda0975d2ac99101dcb9db1d2b76c61b03d->leave($__internal_15179e73980257b933ecbb781ee57dda0975d2ac99101dcb9db1d2b76c61b03d_prof);

        
        $__internal_548402cf210c678f2af9ba4aa39712d8e66556017c0a46edd95331e2b1255e0d->leave($__internal_548402cf210c678f2af9ba4aa39712d8e66556017c0a46edd95331e2b1255e0d_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d3c48291e4664c166ca834ad020a5666bbbf6a9f3e1bb30f1247b4ccf3f4bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3c48291e4664c166ca834ad020a5666bbbf6a9f3e1bb30f1247b4ccf3f4bf0->enter($__internal_9d3c48291e4664c166ca834ad020a5666bbbf6a9f3e1bb30f1247b4ccf3f4bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_100429cd58a54e9366d1481693a01bac4039fd0a87f157c540993bb56f599512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100429cd58a54e9366d1481693a01bac4039fd0a87f157c540993bb56f599512->enter($__internal_100429cd58a54e9366d1481693a01bac4039fd0a87f157c540993bb56f599512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queryCount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_100429cd58a54e9366d1481693a01bac4039fd0a87f157c540993bb56f599512->leave($__internal_100429cd58a54e9366d1481693a01bac4039fd0a87f157c540993bb56f599512_prof);

        
        $__internal_9d3c48291e4664c166ca834ad020a5666bbbf6a9f3e1bb30f1247b4ccf3f4bf0->leave($__internal_9d3c48291e4664c166ca834ad020a5666bbbf6a9f3e1bb30f1247b4ccf3f4bf0_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d159e9a0d36a9e5370be9aad4fb6fb255cefbe492828e166e54849056d0421d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d159e9a0d36a9e5370be9aad4fb6fb255cefbe492828e166e54849056d0421d->enter($__internal_9d159e9a0d36a9e5370be9aad4fb6fb255cefbe492828e166e54849056d0421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_101ddca18fc197b208b3f29a4333327378d19dfc39891c41d542f96a602b480c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101ddca18fc197b208b3f29a4333327378d19dfc39891c41d542f96a602b480c->enter($__internal_101ddca18fc197b208b3f29a4333327378d19dfc39891c41d542f96a602b480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    <h2>Queries</h2>

    ";
        // line 39
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queries", array()))) {
            // line 40
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 44
            echo "        <ul class=\"alt\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "queries", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 46
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 48
                echo twig_escape_filter($this->env, $context["query"], "html", null, true);
                echo "</code>
                    </div>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
    ";
        }
        
        $__internal_101ddca18fc197b208b3f29a4333327378d19dfc39891c41d542f96a602b480c->leave($__internal_101ddca18fc197b208b3f29a4333327378d19dfc39891c41d542f96a602b480c_prof);

        
        $__internal_9d159e9a0d36a9e5370be9aad4fb6fb255cefbe492828e166e54849056d0421d->leave($__internal_9d159e9a0d36a9e5370be9aad4fb6fb255cefbe492828e166e54849056d0421d_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 52,  189 => 48,  183 => 46,  166 => 45,  163 => 44,  157 => 40,  155 => 39,  151 => 37,  142 => 36,  128 => 31,  122 => 27,  113 => 26,  102 => 23,  99 => 22,  93 => 19,  89 => 17,  86 => 16,  83 => 15,  78 => 13,  73 => 12,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% if collector.queryCount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            {% else %}
                {{ include('@DoctrineMongoDB/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.queryCount }}</span>
            {% endif %}
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            </div>
        {% endset %}
        {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>{{ collector.queryCount }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>Queries</h2>

    {% if collector.queries is empty %}
        <p>
            <em>No queries.</em>
        </p>
    {% else %}
        <ul class=\"alt\">
            {% for query in collector.queries %}
                <li class=\"{{ cycle(['odd', 'even'], loop.index) }}\">
                    <div>
                        <code>{{ query }}</code>
                    </div>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}
", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/doctrine/mongodb-odm-bundle/Resources/views/Collector/mongodb.html.twig");
    }
}
