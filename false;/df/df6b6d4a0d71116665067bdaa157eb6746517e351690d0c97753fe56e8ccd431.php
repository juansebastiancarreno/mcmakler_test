<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8f5c0ae5876ec3bc5037fc440eef92f13aae3fada9eca5cf847a304e087393a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_303040373aeb4ec2e2af6d001599f49d58b7bf453d54a4d42556f461b50666a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303040373aeb4ec2e2af6d001599f49d58b7bf453d54a4d42556f461b50666a4->enter($__internal_303040373aeb4ec2e2af6d001599f49d58b7bf453d54a4d42556f461b50666a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a49669743478556d1dc677ef8634d0adebd1cdff84a9ef5cebc76cbd279ba0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49669743478556d1dc677ef8634d0adebd1cdff84a9ef5cebc76cbd279ba0ff->enter($__internal_a49669743478556d1dc677ef8634d0adebd1cdff84a9ef5cebc76cbd279ba0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_303040373aeb4ec2e2af6d001599f49d58b7bf453d54a4d42556f461b50666a4->leave($__internal_303040373aeb4ec2e2af6d001599f49d58b7bf453d54a4d42556f461b50666a4_prof);

        
        $__internal_a49669743478556d1dc677ef8634d0adebd1cdff84a9ef5cebc76cbd279ba0ff->leave($__internal_a49669743478556d1dc677ef8634d0adebd1cdff84a9ef5cebc76cbd279ba0ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac50b4067c2fbc1850484f329e8bf34017a05a1057ed5b65aea172068f6ef254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac50b4067c2fbc1850484f329e8bf34017a05a1057ed5b65aea172068f6ef254->enter($__internal_ac50b4067c2fbc1850484f329e8bf34017a05a1057ed5b65aea172068f6ef254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96f8fac8b61e6e2804bfe276173aea12c5b45018caf309649c317e7c7d5ffe64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f8fac8b61e6e2804bfe276173aea12c5b45018caf309649c317e7c7d5ffe64->enter($__internal_96f8fac8b61e6e2804bfe276173aea12c5b45018caf309649c317e7c7d5ffe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_96f8fac8b61e6e2804bfe276173aea12c5b45018caf309649c317e7c7d5ffe64->leave($__internal_96f8fac8b61e6e2804bfe276173aea12c5b45018caf309649c317e7c7d5ffe64_prof);

        
        $__internal_ac50b4067c2fbc1850484f329e8bf34017a05a1057ed5b65aea172068f6ef254->leave($__internal_ac50b4067c2fbc1850484f329e8bf34017a05a1057ed5b65aea172068f6ef254_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1e0f3f37e962577c1b3a5538f68e02afec92acf8272285d282e1d360bbfa748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e0f3f37e962577c1b3a5538f68e02afec92acf8272285d282e1d360bbfa748->enter($__internal_a1e0f3f37e962577c1b3a5538f68e02afec92acf8272285d282e1d360bbfa748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c7af0e20c08ae701f66ea575757db8ccab6a2075bb9251bd1157a0708407acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7af0e20c08ae701f66ea575757db8ccab6a2075bb9251bd1157a0708407acc->enter($__internal_3c7af0e20c08ae701f66ea575757db8ccab6a2075bb9251bd1157a0708407acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3c7af0e20c08ae701f66ea575757db8ccab6a2075bb9251bd1157a0708407acc->leave($__internal_3c7af0e20c08ae701f66ea575757db8ccab6a2075bb9251bd1157a0708407acc_prof);

        
        $__internal_a1e0f3f37e962577c1b3a5538f68e02afec92acf8272285d282e1d360bbfa748->leave($__internal_a1e0f3f37e962577c1b3a5538f68e02afec92acf8272285d282e1d360bbfa748_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_08821f2fb816a451ebd14c2af98b91d79117c519aa05a0beaf0980c5dfc30fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08821f2fb816a451ebd14c2af98b91d79117c519aa05a0beaf0980c5dfc30fdf->enter($__internal_08821f2fb816a451ebd14c2af98b91d79117c519aa05a0beaf0980c5dfc30fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1033f8e440a8b0712af64e26c7fe5056d7c7ff980cce153538b2c0e1a053127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1033f8e440a8b0712af64e26c7fe5056d7c7ff980cce153538b2c0e1a053127->enter($__internal_b1033f8e440a8b0712af64e26c7fe5056d7c7ff980cce153538b2c0e1a053127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1033f8e440a8b0712af64e26c7fe5056d7c7ff980cce153538b2c0e1a053127->leave($__internal_b1033f8e440a8b0712af64e26c7fe5056d7c7ff980cce153538b2c0e1a053127_prof);

        
        $__internal_08821f2fb816a451ebd14c2af98b91d79117c519aa05a0beaf0980c5dfc30fdf->leave($__internal_08821f2fb816a451ebd14c2af98b91d79117c519aa05a0beaf0980c5dfc30fdf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
