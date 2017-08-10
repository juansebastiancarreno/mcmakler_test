<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_1c551b518579f3bf4ac7e16d7d089e2350dc4b5c57ab3e9a2763d933f9882212 extends Twig_Template
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
        $__internal_3c9ced322d80c24b6c9533e2533d010f87541b5032be468c58c2f7813b3631c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9ced322d80c24b6c9533e2533d010f87541b5032be468c58c2f7813b3631c0->enter($__internal_3c9ced322d80c24b6c9533e2533d010f87541b5032be468c58c2f7813b3631c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cc7a3595332cb00094d7627fa0b6dba163c2d4b8adee240b16bf0740b2b9af02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7a3595332cb00094d7627fa0b6dba163c2d4b8adee240b16bf0740b2b9af02->enter($__internal_cc7a3595332cb00094d7627fa0b6dba163c2d4b8adee240b16bf0740b2b9af02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3c9ced322d80c24b6c9533e2533d010f87541b5032be468c58c2f7813b3631c0->leave($__internal_3c9ced322d80c24b6c9533e2533d010f87541b5032be468c58c2f7813b3631c0_prof);

        
        $__internal_cc7a3595332cb00094d7627fa0b6dba163c2d4b8adee240b16bf0740b2b9af02->leave($__internal_cc7a3595332cb00094d7627fa0b6dba163c2d4b8adee240b16bf0740b2b9af02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
