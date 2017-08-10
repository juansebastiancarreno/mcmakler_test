<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9b81c740e8c4f2a20354d9c61348e9e8f3110eb98bf022a76de2fbc17f36e203 extends Twig_Template
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
        $__internal_cb6fc209bbf9764aa66325ccbd2d3ba98d83eb77900f898fe1c5933685564841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6fc209bbf9764aa66325ccbd2d3ba98d83eb77900f898fe1c5933685564841->enter($__internal_cb6fc209bbf9764aa66325ccbd2d3ba98d83eb77900f898fe1c5933685564841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_93617bec6d5adc2c7aa1b925c05479a1da32b7ad3666c1557a88f7a77020022a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93617bec6d5adc2c7aa1b925c05479a1da32b7ad3666c1557a88f7a77020022a->enter($__internal_93617bec6d5adc2c7aa1b925c05479a1da32b7ad3666c1557a88f7a77020022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb6fc209bbf9764aa66325ccbd2d3ba98d83eb77900f898fe1c5933685564841->leave($__internal_cb6fc209bbf9764aa66325ccbd2d3ba98d83eb77900f898fe1c5933685564841_prof);

        
        $__internal_93617bec6d5adc2c7aa1b925c05479a1da32b7ad3666c1557a88f7a77020022a->leave($__internal_93617bec6d5adc2c7aa1b925c05479a1da32b7ad3666c1557a88f7a77020022a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
