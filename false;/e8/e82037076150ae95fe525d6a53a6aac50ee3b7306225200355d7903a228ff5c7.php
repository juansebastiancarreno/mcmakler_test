<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_55a8a3f5d4699725fd4a0b3bff5019308a921970992bd51ca67008d0b70cee6e extends Twig_Template
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
        $__internal_4ca02c2f0fb1c27810545987b8746ff6f1ca26086c7c9852d8ec82770dfc59b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca02c2f0fb1c27810545987b8746ff6f1ca26086c7c9852d8ec82770dfc59b4->enter($__internal_4ca02c2f0fb1c27810545987b8746ff6f1ca26086c7c9852d8ec82770dfc59b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_93a74acc6449c96c9fb19258fb0a5808bf75e3987c29099125da7e91f8e06634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a74acc6449c96c9fb19258fb0a5808bf75e3987c29099125da7e91f8e06634->enter($__internal_93a74acc6449c96c9fb19258fb0a5808bf75e3987c29099125da7e91f8e06634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4ca02c2f0fb1c27810545987b8746ff6f1ca26086c7c9852d8ec82770dfc59b4->leave($__internal_4ca02c2f0fb1c27810545987b8746ff6f1ca26086c7c9852d8ec82770dfc59b4_prof);

        
        $__internal_93a74acc6449c96c9fb19258fb0a5808bf75e3987c29099125da7e91f8e06634->leave($__internal_93a74acc6449c96c9fb19258fb0a5808bf75e3987c29099125da7e91f8e06634_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
