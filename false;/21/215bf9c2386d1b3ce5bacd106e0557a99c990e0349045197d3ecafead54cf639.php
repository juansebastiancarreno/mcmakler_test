<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_87bd6ea206827da8f490fd8b2fbcd0e7df760fb53260a032b72397be79ef631a extends Twig_Template
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
        $__internal_4dcfdc34a070c2fdc43c813d217fea3e76e123df1f88e64706e2680c371709e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcfdc34a070c2fdc43c813d217fea3e76e123df1f88e64706e2680c371709e5->enter($__internal_4dcfdc34a070c2fdc43c813d217fea3e76e123df1f88e64706e2680c371709e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c40ab3e0fce0feafa37e41f7b9c5ee5d21f7d0b88b0d3e8aabeeb2dde15503e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40ab3e0fce0feafa37e41f7b9c5ee5d21f7d0b88b0d3e8aabeeb2dde15503e3->enter($__internal_c40ab3e0fce0feafa37e41f7b9c5ee5d21f7d0b88b0d3e8aabeeb2dde15503e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4dcfdc34a070c2fdc43c813d217fea3e76e123df1f88e64706e2680c371709e5->leave($__internal_4dcfdc34a070c2fdc43c813d217fea3e76e123df1f88e64706e2680c371709e5_prof);

        
        $__internal_c40ab3e0fce0feafa37e41f7b9c5ee5d21f7d0b88b0d3e8aabeeb2dde15503e3->leave($__internal_c40ab3e0fce0feafa37e41f7b9c5ee5d21f7d0b88b0d3e8aabeeb2dde15503e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
