<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9f3e4921567199b46688257029507536d7ec4c2290a818bfd25f884cae671e37 extends Twig_Template
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
        $__internal_c77d32718598427dbfc75e7364fa06bf551f64f1b43b23aa0ffa73db2b36fb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77d32718598427dbfc75e7364fa06bf551f64f1b43b23aa0ffa73db2b36fb56->enter($__internal_c77d32718598427dbfc75e7364fa06bf551f64f1b43b23aa0ffa73db2b36fb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_163fb8ad47b0ec62a3d6e842f6b197411b3ea4d383fd87a0b0224f635d657c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163fb8ad47b0ec62a3d6e842f6b197411b3ea4d383fd87a0b0224f635d657c4c->enter($__internal_163fb8ad47b0ec62a3d6e842f6b197411b3ea4d383fd87a0b0224f635d657c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c77d32718598427dbfc75e7364fa06bf551f64f1b43b23aa0ffa73db2b36fb56->leave($__internal_c77d32718598427dbfc75e7364fa06bf551f64f1b43b23aa0ffa73db2b36fb56_prof);

        
        $__internal_163fb8ad47b0ec62a3d6e842f6b197411b3ea4d383fd87a0b0224f635d657c4c->leave($__internal_163fb8ad47b0ec62a3d6e842f6b197411b3ea4d383fd87a0b0224f635d657c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
