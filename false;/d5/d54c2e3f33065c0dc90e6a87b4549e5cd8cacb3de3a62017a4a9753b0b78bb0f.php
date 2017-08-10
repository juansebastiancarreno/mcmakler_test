<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2fc293b8079f97034622d1c4b8d5bbac05f036669c4b62c6a98b6bda5cc3e352 extends Twig_Template
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
        $__internal_306e6dd971e82f817dd645633c164c390f757d039e1d91254ea9972033707158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306e6dd971e82f817dd645633c164c390f757d039e1d91254ea9972033707158->enter($__internal_306e6dd971e82f817dd645633c164c390f757d039e1d91254ea9972033707158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_071a838a6c779003e0db992f2f57fb5cf38072fbf8545c8801a2f715269e890b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071a838a6c779003e0db992f2f57fb5cf38072fbf8545c8801a2f715269e890b->enter($__internal_071a838a6c779003e0db992f2f57fb5cf38072fbf8545c8801a2f715269e890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_306e6dd971e82f817dd645633c164c390f757d039e1d91254ea9972033707158->leave($__internal_306e6dd971e82f817dd645633c164c390f757d039e1d91254ea9972033707158_prof);

        
        $__internal_071a838a6c779003e0db992f2f57fb5cf38072fbf8545c8801a2f715269e890b->leave($__internal_071a838a6c779003e0db992f2f57fb5cf38072fbf8545c8801a2f715269e890b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
