<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c5b2a967f4ffe0d147a8c3b21e313617b329b8b3c527f23c6a32cf52faeccc76 extends Twig_Template
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
        $__internal_a9bfa0974676a1e6b5bf94b74234e9e5a2247ccf816d1203d50467849cd66916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bfa0974676a1e6b5bf94b74234e9e5a2247ccf816d1203d50467849cd66916->enter($__internal_a9bfa0974676a1e6b5bf94b74234e9e5a2247ccf816d1203d50467849cd66916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5ea62266364f679aa1a630092c8773cd61698b900ea4f881080b4bf51eef7362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea62266364f679aa1a630092c8773cd61698b900ea4f881080b4bf51eef7362->enter($__internal_5ea62266364f679aa1a630092c8773cd61698b900ea4f881080b4bf51eef7362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a9bfa0974676a1e6b5bf94b74234e9e5a2247ccf816d1203d50467849cd66916->leave($__internal_a9bfa0974676a1e6b5bf94b74234e9e5a2247ccf816d1203d50467849cd66916_prof);

        
        $__internal_5ea62266364f679aa1a630092c8773cd61698b900ea4f881080b4bf51eef7362->leave($__internal_5ea62266364f679aa1a630092c8773cd61698b900ea4f881080b4bf51eef7362_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
