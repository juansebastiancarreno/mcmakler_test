<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_0c47be99781ce9df2db79255a548e1447385773452ce79676f371fb070e77476 extends Twig_Template
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
        $__internal_be35a45a353ba0ea95fa76e8040a01ff5d45d7d8ea57c208278532b9a964b4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be35a45a353ba0ea95fa76e8040a01ff5d45d7d8ea57c208278532b9a964b4f3->enter($__internal_be35a45a353ba0ea95fa76e8040a01ff5d45d7d8ea57c208278532b9a964b4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea2eab59ff558c6d751b436f6692da19ea8efba080d4a416fd91d7b2939e9963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2eab59ff558c6d751b436f6692da19ea8efba080d4a416fd91d7b2939e9963->enter($__internal_ea2eab59ff558c6d751b436f6692da19ea8efba080d4a416fd91d7b2939e9963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_be35a45a353ba0ea95fa76e8040a01ff5d45d7d8ea57c208278532b9a964b4f3->leave($__internal_be35a45a353ba0ea95fa76e8040a01ff5d45d7d8ea57c208278532b9a964b4f3_prof);

        
        $__internal_ea2eab59ff558c6d751b436f6692da19ea8efba080d4a416fd91d7b2939e9963->leave($__internal_ea2eab59ff558c6d751b436f6692da19ea8efba080d4a416fd91d7b2939e9963_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
