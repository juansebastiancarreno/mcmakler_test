<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_4b12982a5e028ea9bc4b0a81c85296f4c0063964695de756d41def09ae8e3c72 extends Twig_Template
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
        $__internal_eafbe40a1d73af9c0ef22ef331da5a11860806cca470bc1b6e75136c4dff7fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafbe40a1d73af9c0ef22ef331da5a11860806cca470bc1b6e75136c4dff7fdc->enter($__internal_eafbe40a1d73af9c0ef22ef331da5a11860806cca470bc1b6e75136c4dff7fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1a766bfded592e9da3e1c7a6ebb43518cb9d39e6afd3d5a9831bfddd41540427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a766bfded592e9da3e1c7a6ebb43518cb9d39e6afd3d5a9831bfddd41540427->enter($__internal_1a766bfded592e9da3e1c7a6ebb43518cb9d39e6afd3d5a9831bfddd41540427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_eafbe40a1d73af9c0ef22ef331da5a11860806cca470bc1b6e75136c4dff7fdc->leave($__internal_eafbe40a1d73af9c0ef22ef331da5a11860806cca470bc1b6e75136c4dff7fdc_prof);

        
        $__internal_1a766bfded592e9da3e1c7a6ebb43518cb9d39e6afd3d5a9831bfddd41540427->leave($__internal_1a766bfded592e9da3e1c7a6ebb43518cb9d39e6afd3d5a9831bfddd41540427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
