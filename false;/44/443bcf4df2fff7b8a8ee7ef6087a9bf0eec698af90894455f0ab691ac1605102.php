<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_2660996e8954dba4bac169dbebea97d029ff96f685869de6b6262c4ac39a3b16 extends Twig_Template
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
        $__internal_d7bfc30bd42b5778f28e7eb21ebb029fdcd94e4146490b9213dc7083a2671ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bfc30bd42b5778f28e7eb21ebb029fdcd94e4146490b9213dc7083a2671ce0->enter($__internal_d7bfc30bd42b5778f28e7eb21ebb029fdcd94e4146490b9213dc7083a2671ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5402c304c8a4856eec58c684202d8fc8c56fe0fbec736b42f33aa208cf1bdc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5402c304c8a4856eec58c684202d8fc8c56fe0fbec736b42f33aa208cf1bdc43->enter($__internal_5402c304c8a4856eec58c684202d8fc8c56fe0fbec736b42f33aa208cf1bdc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d7bfc30bd42b5778f28e7eb21ebb029fdcd94e4146490b9213dc7083a2671ce0->leave($__internal_d7bfc30bd42b5778f28e7eb21ebb029fdcd94e4146490b9213dc7083a2671ce0_prof);

        
        $__internal_5402c304c8a4856eec58c684202d8fc8c56fe0fbec736b42f33aa208cf1bdc43->leave($__internal_5402c304c8a4856eec58c684202d8fc8c56fe0fbec736b42f33aa208cf1bdc43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
