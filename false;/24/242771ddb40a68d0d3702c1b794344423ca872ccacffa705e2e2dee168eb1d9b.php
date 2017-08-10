<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9c1b04b8a3b1da2bc8f4f0c9dd4829313a75e1c7cc0d306436020582db0817b0 extends Twig_Template
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
        $__internal_8fe91dcb70c1df5f7e8be2f59564a2c7052439089c8f5b5b796d4388226b8c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe91dcb70c1df5f7e8be2f59564a2c7052439089c8f5b5b796d4388226b8c2d->enter($__internal_8fe91dcb70c1df5f7e8be2f59564a2c7052439089c8f5b5b796d4388226b8c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_59caefa89d0aebf3935fa21d63e290ba4e9104b21047c79808596cbf097292f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59caefa89d0aebf3935fa21d63e290ba4e9104b21047c79808596cbf097292f6->enter($__internal_59caefa89d0aebf3935fa21d63e290ba4e9104b21047c79808596cbf097292f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8fe91dcb70c1df5f7e8be2f59564a2c7052439089c8f5b5b796d4388226b8c2d->leave($__internal_8fe91dcb70c1df5f7e8be2f59564a2c7052439089c8f5b5b796d4388226b8c2d_prof);

        
        $__internal_59caefa89d0aebf3935fa21d63e290ba4e9104b21047c79808596cbf097292f6->leave($__internal_59caefa89d0aebf3935fa21d63e290ba4e9104b21047c79808596cbf097292f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
