<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_e9d4a11a11c869153e209a3660fb7bf1c72c4115fd4124a93a3a7863bce943f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b39cc08098fc1401a2064284ceb49c9dc853bc7619d70c851a8df1b1542ba857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39cc08098fc1401a2064284ceb49c9dc853bc7619d70c851a8df1b1542ba857->enter($__internal_b39cc08098fc1401a2064284ceb49c9dc853bc7619d70c851a8df1b1542ba857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d8a847db2f1716e9bf3a56c4bd8156f5696f4c965ea23b8044f61c68cd087066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a847db2f1716e9bf3a56c4bd8156f5696f4c965ea23b8044f61c68cd087066->enter($__internal_d8a847db2f1716e9bf3a56c4bd8156f5696f4c965ea23b8044f61c68cd087066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b39cc08098fc1401a2064284ceb49c9dc853bc7619d70c851a8df1b1542ba857->leave($__internal_b39cc08098fc1401a2064284ceb49c9dc853bc7619d70c851a8df1b1542ba857_prof);

        
        $__internal_d8a847db2f1716e9bf3a56c4bd8156f5696f4c965ea23b8044f61c68cd087066->leave($__internal_d8a847db2f1716e9bf3a56c4bd8156f5696f4c965ea23b8044f61c68cd087066_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a63fa1110f2ef70cbed99a6a7e3c38e4160bfd5e7e9a8cf47efef35aa04c061b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63fa1110f2ef70cbed99a6a7e3c38e4160bfd5e7e9a8cf47efef35aa04c061b->enter($__internal_a63fa1110f2ef70cbed99a6a7e3c38e4160bfd5e7e9a8cf47efef35aa04c061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7bae0caae046fcbb480c943aa1a039fb7e598ab04b4c344027167c3b8a86939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bae0caae046fcbb480c943aa1a039fb7e598ab04b4c344027167c3b8a86939->enter($__internal_b7bae0caae046fcbb480c943aa1a039fb7e598ab04b4c344027167c3b8a86939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b7bae0caae046fcbb480c943aa1a039fb7e598ab04b4c344027167c3b8a86939->leave($__internal_b7bae0caae046fcbb480c943aa1a039fb7e598ab04b4c344027167c3b8a86939_prof);

        
        $__internal_a63fa1110f2ef70cbed99a6a7e3c38e4160bfd5e7e9a8cf47efef35aa04c061b->leave($__internal_a63fa1110f2ef70cbed99a6a7e3c38e4160bfd5e7e9a8cf47efef35aa04c061b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f62860cfb83eb42fa4cfa850f9acbf2735e026dda85359f5c7f6e9911e397d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62860cfb83eb42fa4cfa850f9acbf2735e026dda85359f5c7f6e9911e397d25->enter($__internal_f62860cfb83eb42fa4cfa850f9acbf2735e026dda85359f5c7f6e9911e397d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_150d58963f6044876574ae1b10f1c7dcd9ece60aed1b7f3c90e80dcb3aaf2a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d58963f6044876574ae1b10f1c7dcd9ece60aed1b7f3c90e80dcb3aaf2a58->enter($__internal_150d58963f6044876574ae1b10f1c7dcd9ece60aed1b7f3c90e80dcb3aaf2a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_150d58963f6044876574ae1b10f1c7dcd9ece60aed1b7f3c90e80dcb3aaf2a58->leave($__internal_150d58963f6044876574ae1b10f1c7dcd9ece60aed1b7f3c90e80dcb3aaf2a58_prof);

        
        $__internal_f62860cfb83eb42fa4cfa850f9acbf2735e026dda85359f5c7f6e9911e397d25->leave($__internal_f62860cfb83eb42fa4cfa850f9acbf2735e026dda85359f5c7f6e9911e397d25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
