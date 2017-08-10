<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9179fb192052cb34611ee6e3af0169e9523daa3a30b485d977ee61cbd01bb1cc extends Twig_Template
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
        $__internal_c6a41fda7a390da1f1bfe4ac5288b92af31281848f549ce1d5944d84f5b29255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a41fda7a390da1f1bfe4ac5288b92af31281848f549ce1d5944d84f5b29255->enter($__internal_c6a41fda7a390da1f1bfe4ac5288b92af31281848f549ce1d5944d84f5b29255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_feda1dcca63c1e459b84e6c7c44fea83138e66c8bd2c41396a0376e123aa63e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feda1dcca63c1e459b84e6c7c44fea83138e66c8bd2c41396a0376e123aa63e2->enter($__internal_feda1dcca63c1e459b84e6c7c44fea83138e66c8bd2c41396a0376e123aa63e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c6a41fda7a390da1f1bfe4ac5288b92af31281848f549ce1d5944d84f5b29255->leave($__internal_c6a41fda7a390da1f1bfe4ac5288b92af31281848f549ce1d5944d84f5b29255_prof);

        
        $__internal_feda1dcca63c1e459b84e6c7c44fea83138e66c8bd2c41396a0376e123aa63e2->leave($__internal_feda1dcca63c1e459b84e6c7c44fea83138e66c8bd2c41396a0376e123aa63e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
