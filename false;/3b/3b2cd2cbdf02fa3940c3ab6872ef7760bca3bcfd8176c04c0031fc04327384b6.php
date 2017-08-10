<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_93b7faf6b909844db761ed04b93e6668bcfae728bf2cd2f3594863d4a02d21eb extends Twig_Template
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
        $__internal_214e72445d2ab72f42461e7349362dd4616254162608b5b96a111a9b5fd2ce5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214e72445d2ab72f42461e7349362dd4616254162608b5b96a111a9b5fd2ce5a->enter($__internal_214e72445d2ab72f42461e7349362dd4616254162608b5b96a111a9b5fd2ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_ffa1e09c04dd1845628f55b7c7039ba55e672e6f49bdd084d618772d904db78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa1e09c04dd1845628f55b7c7039ba55e672e6f49bdd084d618772d904db78a->enter($__internal_ffa1e09c04dd1845628f55b7c7039ba55e672e6f49bdd084d618772d904db78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_214e72445d2ab72f42461e7349362dd4616254162608b5b96a111a9b5fd2ce5a->leave($__internal_214e72445d2ab72f42461e7349362dd4616254162608b5b96a111a9b5fd2ce5a_prof);

        
        $__internal_ffa1e09c04dd1845628f55b7c7039ba55e672e6f49bdd084d618772d904db78a->leave($__internal_ffa1e09c04dd1845628f55b7c7039ba55e672e6f49bdd084d618772d904db78a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
