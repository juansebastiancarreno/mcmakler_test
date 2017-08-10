<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_643a0e8da1b2b21a456f2e50b9b47cf0a2ff6c9c4baaaa76d5c83ad69294ad40 extends Twig_Template
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
        $__internal_a9ef8e1ed464831c6ac9fad2a9326ca7243fda3286e8b0ce1d2c70e0b19e1aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9ef8e1ed464831c6ac9fad2a9326ca7243fda3286e8b0ce1d2c70e0b19e1aa3->enter($__internal_a9ef8e1ed464831c6ac9fad2a9326ca7243fda3286e8b0ce1d2c70e0b19e1aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_4bfbe23799a8a515bad9eff146a3012e59369dd35dd8ca559aebdd766eaf1b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfbe23799a8a515bad9eff146a3012e59369dd35dd8ca559aebdd766eaf1b2c->enter($__internal_4bfbe23799a8a515bad9eff146a3012e59369dd35dd8ca559aebdd766eaf1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_a9ef8e1ed464831c6ac9fad2a9326ca7243fda3286e8b0ce1d2c70e0b19e1aa3->leave($__internal_a9ef8e1ed464831c6ac9fad2a9326ca7243fda3286e8b0ce1d2c70e0b19e1aa3_prof);

        
        $__internal_4bfbe23799a8a515bad9eff146a3012e59369dd35dd8ca559aebdd766eaf1b2c->leave($__internal_4bfbe23799a8a515bad9eff146a3012e59369dd35dd8ca559aebdd766eaf1b2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
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
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
