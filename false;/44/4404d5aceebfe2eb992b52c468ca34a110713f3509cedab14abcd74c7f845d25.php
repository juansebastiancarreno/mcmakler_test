<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_787efa064bcd3a47e69ec1038677f0ea8ac32a5e2b5489f50bdedc8b93a8f64f extends Twig_Template
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
        $__internal_dc81901efcc3ce8a2cc6c3a1215a4e04521723a2baca07692f23a5edb6c872a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc81901efcc3ce8a2cc6c3a1215a4e04521723a2baca07692f23a5edb6c872a4->enter($__internal_dc81901efcc3ce8a2cc6c3a1215a4e04521723a2baca07692f23a5edb6c872a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ca6179abfec854bdfd8c9c70089112bd675fd1462e63f709eeac96cf5c85c362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6179abfec854bdfd8c9c70089112bd675fd1462e63f709eeac96cf5c85c362->enter($__internal_ca6179abfec854bdfd8c9c70089112bd675fd1462e63f709eeac96cf5c85c362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dc81901efcc3ce8a2cc6c3a1215a4e04521723a2baca07692f23a5edb6c872a4->leave($__internal_dc81901efcc3ce8a2cc6c3a1215a4e04521723a2baca07692f23a5edb6c872a4_prof);

        
        $__internal_ca6179abfec854bdfd8c9c70089112bd675fd1462e63f709eeac96cf5c85c362->leave($__internal_ca6179abfec854bdfd8c9c70089112bd675fd1462e63f709eeac96cf5c85c362_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
