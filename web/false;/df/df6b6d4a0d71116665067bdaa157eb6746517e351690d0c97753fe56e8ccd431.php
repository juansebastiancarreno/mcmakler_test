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
        $__internal_99bd5255973930f80a473188030e46f4254ab5f515bcdccd57a899938903ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bd5255973930f80a473188030e46f4254ab5f515bcdccd57a899938903ddea->enter($__internal_99bd5255973930f80a473188030e46f4254ab5f515bcdccd57a899938903ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f81d7047712b36fcdee7d5bc976eef4b85472b920d18dd4ba1336cb01f0e675c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81d7047712b36fcdee7d5bc976eef4b85472b920d18dd4ba1336cb01f0e675c->enter($__internal_f81d7047712b36fcdee7d5bc976eef4b85472b920d18dd4ba1336cb01f0e675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_99bd5255973930f80a473188030e46f4254ab5f515bcdccd57a899938903ddea->leave($__internal_99bd5255973930f80a473188030e46f4254ab5f515bcdccd57a899938903ddea_prof);

        
        $__internal_f81d7047712b36fcdee7d5bc976eef4b85472b920d18dd4ba1336cb01f0e675c->leave($__internal_f81d7047712b36fcdee7d5bc976eef4b85472b920d18dd4ba1336cb01f0e675c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e89a2277b0c2190d7bfd951e2f6e701ce93643bc09480718295e0b79151f1852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e89a2277b0c2190d7bfd951e2f6e701ce93643bc09480718295e0b79151f1852->enter($__internal_e89a2277b0c2190d7bfd951e2f6e701ce93643bc09480718295e0b79151f1852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3460b45df49d0b55d3a7681f4efffcbb7ea414ab921acb252df124b0fecd095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3460b45df49d0b55d3a7681f4efffcbb7ea414ab921acb252df124b0fecd095->enter($__internal_b3460b45df49d0b55d3a7681f4efffcbb7ea414ab921acb252df124b0fecd095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b3460b45df49d0b55d3a7681f4efffcbb7ea414ab921acb252df124b0fecd095->leave($__internal_b3460b45df49d0b55d3a7681f4efffcbb7ea414ab921acb252df124b0fecd095_prof);

        
        $__internal_e89a2277b0c2190d7bfd951e2f6e701ce93643bc09480718295e0b79151f1852->leave($__internal_e89a2277b0c2190d7bfd951e2f6e701ce93643bc09480718295e0b79151f1852_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f14ee66969d4534b7d96ecb8c3cfc81472de4511c9939509180e213b0ea10e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14ee66969d4534b7d96ecb8c3cfc81472de4511c9939509180e213b0ea10e5e->enter($__internal_f14ee66969d4534b7d96ecb8c3cfc81472de4511c9939509180e213b0ea10e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_596b028dc30a4705fc0c7c143cfd10bbe25191702084661d0b096d5a2a213fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596b028dc30a4705fc0c7c143cfd10bbe25191702084661d0b096d5a2a213fab->enter($__internal_596b028dc30a4705fc0c7c143cfd10bbe25191702084661d0b096d5a2a213fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_596b028dc30a4705fc0c7c143cfd10bbe25191702084661d0b096d5a2a213fab->leave($__internal_596b028dc30a4705fc0c7c143cfd10bbe25191702084661d0b096d5a2a213fab_prof);

        
        $__internal_f14ee66969d4534b7d96ecb8c3cfc81472de4511c9939509180e213b0ea10e5e->leave($__internal_f14ee66969d4534b7d96ecb8c3cfc81472de4511c9939509180e213b0ea10e5e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c5ad6eef399da2ff4446c03065e09d087eaa54386d8297e3aab36374c81818e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5ad6eef399da2ff4446c03065e09d087eaa54386d8297e3aab36374c81818e->enter($__internal_6c5ad6eef399da2ff4446c03065e09d087eaa54386d8297e3aab36374c81818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc6a50019e7eef1feeb87bb5d843fdafe7c5869c3afebc8669b73bc1bd4cbcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6a50019e7eef1feeb87bb5d843fdafe7c5869c3afebc8669b73bc1bd4cbcd9->enter($__internal_cc6a50019e7eef1feeb87bb5d843fdafe7c5869c3afebc8669b73bc1bd4cbcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc6a50019e7eef1feeb87bb5d843fdafe7c5869c3afebc8669b73bc1bd4cbcd9->leave($__internal_cc6a50019e7eef1feeb87bb5d843fdafe7c5869c3afebc8669b73bc1bd4cbcd9_prof);

        
        $__internal_6c5ad6eef399da2ff4446c03065e09d087eaa54386d8297e3aab36374c81818e->leave($__internal_6c5ad6eef399da2ff4446c03065e09d087eaa54386d8297e3aab36374c81818e_prof);

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
