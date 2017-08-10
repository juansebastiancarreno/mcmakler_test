<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_344afd232dca31f31d3bdfab7c07c5c563fdba947cb91b193a41544f0a8c11db extends Twig_Template
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
        $__internal_8163b359fda2a1dad5b1a64a311f6eab010d1239d3112b166703286884aa6f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8163b359fda2a1dad5b1a64a311f6eab010d1239d3112b166703286884aa6f6e->enter($__internal_8163b359fda2a1dad5b1a64a311f6eab010d1239d3112b166703286884aa6f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_5964a9fb6e255ed8a3af26db77e3a2ac3d7b4dcee74b891c258badda476bbf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5964a9fb6e255ed8a3af26db77e3a2ac3d7b4dcee74b891c258badda476bbf53->enter($__internal_5964a9fb6e255ed8a3af26db77e3a2ac3d7b4dcee74b891c258badda476bbf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8163b359fda2a1dad5b1a64a311f6eab010d1239d3112b166703286884aa6f6e->leave($__internal_8163b359fda2a1dad5b1a64a311f6eab010d1239d3112b166703286884aa6f6e_prof);

        
        $__internal_5964a9fb6e255ed8a3af26db77e3a2ac3d7b4dcee74b891c258badda476bbf53->leave($__internal_5964a9fb6e255ed8a3af26db77e3a2ac3d7b4dcee74b891c258badda476bbf53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
