<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1316735eb91a7eea12b200de493bd280b9c2578cdca2fc11fa0c73faa68a07e9 extends Twig_Template
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
        $__internal_ab8f79d4c9ac6c7b4cb63c2ac928155e4b87f42704e5a5bcce5534139e5944cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8f79d4c9ac6c7b4cb63c2ac928155e4b87f42704e5a5bcce5534139e5944cc->enter($__internal_ab8f79d4c9ac6c7b4cb63c2ac928155e4b87f42704e5a5bcce5534139e5944cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_26db843c3e488f1edc85e0538ac8fe6a9a8dafcd7eed9f85955d56cfc6f8f8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26db843c3e488f1edc85e0538ac8fe6a9a8dafcd7eed9f85955d56cfc6f8f8e1->enter($__internal_26db843c3e488f1edc85e0538ac8fe6a9a8dafcd7eed9f85955d56cfc6f8f8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab8f79d4c9ac6c7b4cb63c2ac928155e4b87f42704e5a5bcce5534139e5944cc->leave($__internal_ab8f79d4c9ac6c7b4cb63c2ac928155e4b87f42704e5a5bcce5534139e5944cc_prof);

        
        $__internal_26db843c3e488f1edc85e0538ac8fe6a9a8dafcd7eed9f85955d56cfc6f8f8e1->leave($__internal_26db843c3e488f1edc85e0538ac8fe6a9a8dafcd7eed9f85955d56cfc6f8f8e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
