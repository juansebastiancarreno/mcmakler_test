<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_672bf9ab38848994db4f9e80251fe691ce94c3285351682c3481b8a3e7bac096 extends Twig_Template
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
        $__internal_2c29963107614ab8e450d1024e14cdc73f500fa9e62ddba1caaed73151fb7efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c29963107614ab8e450d1024e14cdc73f500fa9e62ddba1caaed73151fb7efe->enter($__internal_2c29963107614ab8e450d1024e14cdc73f500fa9e62ddba1caaed73151fb7efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ecf67c04aa4847085ef33c9a94cb1abf9118d842df23de1efcd5ac42143a989e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf67c04aa4847085ef33c9a94cb1abf9118d842df23de1efcd5ac42143a989e->enter($__internal_ecf67c04aa4847085ef33c9a94cb1abf9118d842df23de1efcd5ac42143a989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2c29963107614ab8e450d1024e14cdc73f500fa9e62ddba1caaed73151fb7efe->leave($__internal_2c29963107614ab8e450d1024e14cdc73f500fa9e62ddba1caaed73151fb7efe_prof);

        
        $__internal_ecf67c04aa4847085ef33c9a94cb1abf9118d842df23de1efcd5ac42143a989e->leave($__internal_ecf67c04aa4847085ef33c9a94cb1abf9118d842df23de1efcd5ac42143a989e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
