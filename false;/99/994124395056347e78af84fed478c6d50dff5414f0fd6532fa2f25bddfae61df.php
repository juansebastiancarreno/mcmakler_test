<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2313c2812747a65f8b06ed8589d6db341d0adb220ca816bdecc72a9aada21b0f extends Twig_Template
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
        $__internal_67699180216e4bd0164096da0b1c0428bd126a6f9fd0a35d1a7a2b43aee61905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67699180216e4bd0164096da0b1c0428bd126a6f9fd0a35d1a7a2b43aee61905->enter($__internal_67699180216e4bd0164096da0b1c0428bd126a6f9fd0a35d1a7a2b43aee61905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e5c92d55af85740327f85802e0f6fd21c87cbae26ff9fc33b54933d8b3fb8a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c92d55af85740327f85802e0f6fd21c87cbae26ff9fc33b54933d8b3fb8a76->enter($__internal_e5c92d55af85740327f85802e0f6fd21c87cbae26ff9fc33b54933d8b3fb8a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_67699180216e4bd0164096da0b1c0428bd126a6f9fd0a35d1a7a2b43aee61905->leave($__internal_67699180216e4bd0164096da0b1c0428bd126a6f9fd0a35d1a7a2b43aee61905_prof);

        
        $__internal_e5c92d55af85740327f85802e0f6fd21c87cbae26ff9fc33b54933d8b3fb8a76->leave($__internal_e5c92d55af85740327f85802e0f6fd21c87cbae26ff9fc33b54933d8b3fb8a76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
