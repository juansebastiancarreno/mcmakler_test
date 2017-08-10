<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5cb7bc028cb35ca792c5d1e401b001cd6d97151b48e7fe903c7cbd03331ad7da extends Twig_Template
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
        $__internal_e3a21fb2c7eb7223f870ad9a6c8d777f0b894d3964fa576bbc94a529ecc8028a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a21fb2c7eb7223f870ad9a6c8d777f0b894d3964fa576bbc94a529ecc8028a->enter($__internal_e3a21fb2c7eb7223f870ad9a6c8d777f0b894d3964fa576bbc94a529ecc8028a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5e69b863cc15a89eef630802177d1566dcd92e0d005dc65f4bafa6a09075bcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e69b863cc15a89eef630802177d1566dcd92e0d005dc65f4bafa6a09075bcbc->enter($__internal_5e69b863cc15a89eef630802177d1566dcd92e0d005dc65f4bafa6a09075bcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e3a21fb2c7eb7223f870ad9a6c8d777f0b894d3964fa576bbc94a529ecc8028a->leave($__internal_e3a21fb2c7eb7223f870ad9a6c8d777f0b894d3964fa576bbc94a529ecc8028a_prof);

        
        $__internal_5e69b863cc15a89eef630802177d1566dcd92e0d005dc65f4bafa6a09075bcbc->leave($__internal_5e69b863cc15a89eef630802177d1566dcd92e0d005dc65f4bafa6a09075bcbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
