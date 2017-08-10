<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_72a3d8c8d2e929131c140ff11ddab55ae0fb8ead3169d3e93ad47b5173b8f8bf extends Twig_Template
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
        $__internal_850264d5ed1b47977dbb1f2014e87e00b3c8fa216ad3b565aeb159ba499a7d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850264d5ed1b47977dbb1f2014e87e00b3c8fa216ad3b565aeb159ba499a7d93->enter($__internal_850264d5ed1b47977dbb1f2014e87e00b3c8fa216ad3b565aeb159ba499a7d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_74b0253b7f051a7ed0917125ba88552d5c100f4295f9c963bdec7a900e8ed5ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74b0253b7f051a7ed0917125ba88552d5c100f4295f9c963bdec7a900e8ed5ed->enter($__internal_74b0253b7f051a7ed0917125ba88552d5c100f4295f9c963bdec7a900e8ed5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_850264d5ed1b47977dbb1f2014e87e00b3c8fa216ad3b565aeb159ba499a7d93->leave($__internal_850264d5ed1b47977dbb1f2014e87e00b3c8fa216ad3b565aeb159ba499a7d93_prof);

        
        $__internal_74b0253b7f051a7ed0917125ba88552d5c100f4295f9c963bdec7a900e8ed5ed->leave($__internal_74b0253b7f051a7ed0917125ba88552d5c100f4295f9c963bdec7a900e8ed5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
