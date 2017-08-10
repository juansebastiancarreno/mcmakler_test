<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eb7eb35414d4fe18a7fe01096f0183421f2a61cdacd0e688d0a7967ad312d15d extends Twig_Template
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
        $__internal_532829434cea63369154daee8e09262d5f4fa99886574b39a769588d35a24c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532829434cea63369154daee8e09262d5f4fa99886574b39a769588d35a24c10->enter($__internal_532829434cea63369154daee8e09262d5f4fa99886574b39a769588d35a24c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_c5cac06cdeb379884d3e29c331dfc747b79a19dd48c03b6ffb177b143f3a9639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cac06cdeb379884d3e29c331dfc747b79a19dd48c03b6ffb177b143f3a9639->enter($__internal_c5cac06cdeb379884d3e29c331dfc747b79a19dd48c03b6ffb177b143f3a9639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_532829434cea63369154daee8e09262d5f4fa99886574b39a769588d35a24c10->leave($__internal_532829434cea63369154daee8e09262d5f4fa99886574b39a769588d35a24c10_prof);

        
        $__internal_c5cac06cdeb379884d3e29c331dfc747b79a19dd48c03b6ffb177b143f3a9639->leave($__internal_c5cac06cdeb379884d3e29c331dfc747b79a19dd48c03b6ffb177b143f3a9639_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
