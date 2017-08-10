<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_af34036998c538f4af1fd152a786cd6bdb8fed0e6de340822831f15f603e15a9 extends Twig_Template
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
        $__internal_9e2459d646b3e7b321c4a4a3c976c68fcc31fc9a6190b1bc81fd07d69d1d6f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2459d646b3e7b321c4a4a3c976c68fcc31fc9a6190b1bc81fd07d69d1d6f05->enter($__internal_9e2459d646b3e7b321c4a4a3c976c68fcc31fc9a6190b1bc81fd07d69d1d6f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8ac104cfdf257c665d2f947b7239773ff2c723194df4c90b935344ae19761bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac104cfdf257c665d2f947b7239773ff2c723194df4c90b935344ae19761bc7->enter($__internal_8ac104cfdf257c665d2f947b7239773ff2c723194df4c90b935344ae19761bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9e2459d646b3e7b321c4a4a3c976c68fcc31fc9a6190b1bc81fd07d69d1d6f05->leave($__internal_9e2459d646b3e7b321c4a4a3c976c68fcc31fc9a6190b1bc81fd07d69d1d6f05_prof);

        
        $__internal_8ac104cfdf257c665d2f947b7239773ff2c723194df4c90b935344ae19761bc7->leave($__internal_8ac104cfdf257c665d2f947b7239773ff2c723194df4c90b935344ae19761bc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
