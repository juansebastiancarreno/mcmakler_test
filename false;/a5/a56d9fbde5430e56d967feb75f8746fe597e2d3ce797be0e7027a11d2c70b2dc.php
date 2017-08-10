<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_58ffab57d429cdeb48a512551d884c425624ef7d83a7c032f8512338e1177ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c6616b7e1bdb8ed0a198cb5190c14693ba040251feba7fdb4bc09fe5ab2ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c6616b7e1bdb8ed0a198cb5190c14693ba040251feba7fdb4bc09fe5ab2ada->enter($__internal_16c6616b7e1bdb8ed0a198cb5190c14693ba040251feba7fdb4bc09fe5ab2ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d40bfa747b628e6211ac15cdafd24db4b1583e9b818d36aa61ef640607be3a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40bfa747b628e6211ac15cdafd24db4b1583e9b818d36aa61ef640607be3a34->enter($__internal_d40bfa747b628e6211ac15cdafd24db4b1583e9b818d36aa61ef640607be3a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c6616b7e1bdb8ed0a198cb5190c14693ba040251feba7fdb4bc09fe5ab2ada->leave($__internal_16c6616b7e1bdb8ed0a198cb5190c14693ba040251feba7fdb4bc09fe5ab2ada_prof);

        
        $__internal_d40bfa747b628e6211ac15cdafd24db4b1583e9b818d36aa61ef640607be3a34->leave($__internal_d40bfa747b628e6211ac15cdafd24db4b1583e9b818d36aa61ef640607be3a34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b10e070bd3b3c891d93e41e3e76504777438c95e49cc267c52c5de297f3fed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b10e070bd3b3c891d93e41e3e76504777438c95e49cc267c52c5de297f3fed8->enter($__internal_0b10e070bd3b3c891d93e41e3e76504777438c95e49cc267c52c5de297f3fed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8da0e46b9ec4b62b106f7172cbb432b3c7968433461e62a350a018899b65f7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da0e46b9ec4b62b106f7172cbb432b3c7968433461e62a350a018899b65f7d5->enter($__internal_8da0e46b9ec4b62b106f7172cbb432b3c7968433461e62a350a018899b65f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8da0e46b9ec4b62b106f7172cbb432b3c7968433461e62a350a018899b65f7d5->leave($__internal_8da0e46b9ec4b62b106f7172cbb432b3c7968433461e62a350a018899b65f7d5_prof);

        
        $__internal_0b10e070bd3b3c891d93e41e3e76504777438c95e49cc267c52c5de297f3fed8->leave($__internal_0b10e070bd3b3c891d93e41e3e76504777438c95e49cc267c52c5de297f3fed8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_58691b7a3604f668031300cd02bc64c021498229c98e052699c8286be5840cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58691b7a3604f668031300cd02bc64c021498229c98e052699c8286be5840cfc->enter($__internal_58691b7a3604f668031300cd02bc64c021498229c98e052699c8286be5840cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b1350bcf45784dd4701f05557d7aebbfc30612689575b3b47d5c81a1943d924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1350bcf45784dd4701f05557d7aebbfc30612689575b3b47d5c81a1943d924->enter($__internal_9b1350bcf45784dd4701f05557d7aebbfc30612689575b3b47d5c81a1943d924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b1350bcf45784dd4701f05557d7aebbfc30612689575b3b47d5c81a1943d924->leave($__internal_9b1350bcf45784dd4701f05557d7aebbfc30612689575b3b47d5c81a1943d924_prof);

        
        $__internal_58691b7a3604f668031300cd02bc64c021498229c98e052699c8286be5840cfc->leave($__internal_58691b7a3604f668031300cd02bc64c021498229c98e052699c8286be5840cfc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2233dc192f729cf978ead3410bffe3f8eddc0727487dbb971b6b113aacc8b020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2233dc192f729cf978ead3410bffe3f8eddc0727487dbb971b6b113aacc8b020->enter($__internal_2233dc192f729cf978ead3410bffe3f8eddc0727487dbb971b6b113aacc8b020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bef5c34603a0dc24119bce378595477f8e2e6d7a5970b2131ad8fac56746806b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef5c34603a0dc24119bce378595477f8e2e6d7a5970b2131ad8fac56746806b->enter($__internal_bef5c34603a0dc24119bce378595477f8e2e6d7a5970b2131ad8fac56746806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bef5c34603a0dc24119bce378595477f8e2e6d7a5970b2131ad8fac56746806b->leave($__internal_bef5c34603a0dc24119bce378595477f8e2e6d7a5970b2131ad8fac56746806b_prof);

        
        $__internal_2233dc192f729cf978ead3410bffe3f8eddc0727487dbb971b6b113aacc8b020->leave($__internal_2233dc192f729cf978ead3410bffe3f8eddc0727487dbb971b6b113aacc8b020_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
