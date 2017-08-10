<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_93ecced75e995daafb86eb3201c3c0a78eda25adf3d4bd7b10a373b79b528e19 extends Twig_Template
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
        $__internal_9166cfc21776414f82c1fa6ad7513a821c12dd2aaede93f2e328e7e3bcae2541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9166cfc21776414f82c1fa6ad7513a821c12dd2aaede93f2e328e7e3bcae2541->enter($__internal_9166cfc21776414f82c1fa6ad7513a821c12dd2aaede93f2e328e7e3bcae2541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_75b9201c421542b6259e91e908907f33d854ccb99e7754c2ac39d4f99a386afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b9201c421542b6259e91e908907f33d854ccb99e7754c2ac39d4f99a386afd->enter($__internal_75b9201c421542b6259e91e908907f33d854ccb99e7754c2ac39d4f99a386afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9166cfc21776414f82c1fa6ad7513a821c12dd2aaede93f2e328e7e3bcae2541->leave($__internal_9166cfc21776414f82c1fa6ad7513a821c12dd2aaede93f2e328e7e3bcae2541_prof);

        
        $__internal_75b9201c421542b6259e91e908907f33d854ccb99e7754c2ac39d4f99a386afd->leave($__internal_75b9201c421542b6259e91e908907f33d854ccb99e7754c2ac39d4f99a386afd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
