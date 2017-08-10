<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1d98a214c581a576a86ee7a3e9ad69dff380efb173d8da4fc137002d7d8ce8f8 extends Twig_Template
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
        $__internal_769957a78d63b51656233f4bfc51413b0c892b8bc3bf8ced4ea19cef6b1a24b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769957a78d63b51656233f4bfc51413b0c892b8bc3bf8ced4ea19cef6b1a24b4->enter($__internal_769957a78d63b51656233f4bfc51413b0c892b8bc3bf8ced4ea19cef6b1a24b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cfd3f1b93f9f44da21f9e978ae22268f3f633057cefdb836d93693dcf4401a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd3f1b93f9f44da21f9e978ae22268f3f633057cefdb836d93693dcf4401a66->enter($__internal_cfd3f1b93f9f44da21f9e978ae22268f3f633057cefdb836d93693dcf4401a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_769957a78d63b51656233f4bfc51413b0c892b8bc3bf8ced4ea19cef6b1a24b4->leave($__internal_769957a78d63b51656233f4bfc51413b0c892b8bc3bf8ced4ea19cef6b1a24b4_prof);

        
        $__internal_cfd3f1b93f9f44da21f9e978ae22268f3f633057cefdb836d93693dcf4401a66->leave($__internal_cfd3f1b93f9f44da21f9e978ae22268f3f633057cefdb836d93693dcf4401a66_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
