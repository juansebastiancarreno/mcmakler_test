<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f8304177267ad4b9d5a4474cede7232eb2bf3e2c771531609fe4404910968fe1 extends Twig_Template
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
        $__internal_1fe4d6b027740b046d384ae1d343a5297dc3fc07de82925234c15705af55c342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe4d6b027740b046d384ae1d343a5297dc3fc07de82925234c15705af55c342->enter($__internal_1fe4d6b027740b046d384ae1d343a5297dc3fc07de82925234c15705af55c342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_dfa71289f5840c47820fbfeee743a92cd7110f9b8cebeaa5080269601032c633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa71289f5840c47820fbfeee743a92cd7110f9b8cebeaa5080269601032c633->enter($__internal_dfa71289f5840c47820fbfeee743a92cd7110f9b8cebeaa5080269601032c633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1fe4d6b027740b046d384ae1d343a5297dc3fc07de82925234c15705af55c342->leave($__internal_1fe4d6b027740b046d384ae1d343a5297dc3fc07de82925234c15705af55c342_prof);

        
        $__internal_dfa71289f5840c47820fbfeee743a92cd7110f9b8cebeaa5080269601032c633->leave($__internal_dfa71289f5840c47820fbfeee743a92cd7110f9b8cebeaa5080269601032c633_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
