<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1359b4466d6ef1d3a8639672e3b581f602d0ab2c4ff4a922bf783c0daf82a614 extends Twig_Template
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
        $__internal_a043a5fc0b7cc6eaaf627055eb004bc9a5903d22d0635f951c64a200b7985f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a043a5fc0b7cc6eaaf627055eb004bc9a5903d22d0635f951c64a200b7985f54->enter($__internal_a043a5fc0b7cc6eaaf627055eb004bc9a5903d22d0635f951c64a200b7985f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_264570bbd4d0bcb9d5947f9a73b7ab3ac44ea06e192b67287c06dfe695ba00ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264570bbd4d0bcb9d5947f9a73b7ab3ac44ea06e192b67287c06dfe695ba00ce->enter($__internal_264570bbd4d0bcb9d5947f9a73b7ab3ac44ea06e192b67287c06dfe695ba00ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a043a5fc0b7cc6eaaf627055eb004bc9a5903d22d0635f951c64a200b7985f54->leave($__internal_a043a5fc0b7cc6eaaf627055eb004bc9a5903d22d0635f951c64a200b7985f54_prof);

        
        $__internal_264570bbd4d0bcb9d5947f9a73b7ab3ac44ea06e192b67287c06dfe695ba00ce->leave($__internal_264570bbd4d0bcb9d5947f9a73b7ab3ac44ea06e192b67287c06dfe695ba00ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
