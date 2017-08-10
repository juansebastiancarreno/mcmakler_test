<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_626bd3308b38da7a29719809543e72d4e7550097efc08d13b42549097dffdd0e extends Twig_Template
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
        $__internal_f69b5099df642450a075aff0cccec22d284a1eb13cdd409560edfe674a5accbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69b5099df642450a075aff0cccec22d284a1eb13cdd409560edfe674a5accbb->enter($__internal_f69b5099df642450a075aff0cccec22d284a1eb13cdd409560edfe674a5accbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_443bceb05d830dccd15c92afae9629dadaefe96abfbf8069be6b4f04babe15ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443bceb05d830dccd15c92afae9629dadaefe96abfbf8069be6b4f04babe15ec->enter($__internal_443bceb05d830dccd15c92afae9629dadaefe96abfbf8069be6b4f04babe15ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f69b5099df642450a075aff0cccec22d284a1eb13cdd409560edfe674a5accbb->leave($__internal_f69b5099df642450a075aff0cccec22d284a1eb13cdd409560edfe674a5accbb_prof);

        
        $__internal_443bceb05d830dccd15c92afae9629dadaefe96abfbf8069be6b4f04babe15ec->leave($__internal_443bceb05d830dccd15c92afae9629dadaefe96abfbf8069be6b4f04babe15ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
