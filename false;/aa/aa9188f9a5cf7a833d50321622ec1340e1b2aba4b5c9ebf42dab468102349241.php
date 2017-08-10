<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5793a5e5997d40e7e09fa648fde802e313c2c96303407a0510bd9a72e3c28820 extends Twig_Template
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
        $__internal_9bd510a7c5bacf3348138e40fd4eb7d9a2c429b2fc8cb3bb0dfded98477c26d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd510a7c5bacf3348138e40fd4eb7d9a2c429b2fc8cb3bb0dfded98477c26d9->enter($__internal_9bd510a7c5bacf3348138e40fd4eb7d9a2c429b2fc8cb3bb0dfded98477c26d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ee7da29ab2adc07f49008793bbc0362378ca776537f5ed627a562ca539a58486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7da29ab2adc07f49008793bbc0362378ca776537f5ed627a562ca539a58486->enter($__internal_ee7da29ab2adc07f49008793bbc0362378ca776537f5ed627a562ca539a58486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9bd510a7c5bacf3348138e40fd4eb7d9a2c429b2fc8cb3bb0dfded98477c26d9->leave($__internal_9bd510a7c5bacf3348138e40fd4eb7d9a2c429b2fc8cb3bb0dfded98477c26d9_prof);

        
        $__internal_ee7da29ab2adc07f49008793bbc0362378ca776537f5ed627a562ca539a58486->leave($__internal_ee7da29ab2adc07f49008793bbc0362378ca776537f5ed627a562ca539a58486_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
