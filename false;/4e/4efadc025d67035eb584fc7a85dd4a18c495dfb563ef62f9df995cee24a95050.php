<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ec4dd7471ff6788d19639106cf6e90a87f991211ff8851b34392bd9d82b20915 extends Twig_Template
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
        $__internal_b0ce546c19965d66ce0c4d50d71621da7b20d7c3d88215c0a9879f0302cb8b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ce546c19965d66ce0c4d50d71621da7b20d7c3d88215c0a9879f0302cb8b43->enter($__internal_b0ce546c19965d66ce0c4d50d71621da7b20d7c3d88215c0a9879f0302cb8b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_aaa6353a5d74f1f947d3c22cabb888a4931a827066b4397dcce8be225ab58a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa6353a5d74f1f947d3c22cabb888a4931a827066b4397dcce8be225ab58a4a->enter($__internal_aaa6353a5d74f1f947d3c22cabb888a4931a827066b4397dcce8be225ab58a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b0ce546c19965d66ce0c4d50d71621da7b20d7c3d88215c0a9879f0302cb8b43->leave($__internal_b0ce546c19965d66ce0c4d50d71621da7b20d7c3d88215c0a9879f0302cb8b43_prof);

        
        $__internal_aaa6353a5d74f1f947d3c22cabb888a4931a827066b4397dcce8be225ab58a4a->leave($__internal_aaa6353a5d74f1f947d3c22cabb888a4931a827066b4397dcce8be225ab58a4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
