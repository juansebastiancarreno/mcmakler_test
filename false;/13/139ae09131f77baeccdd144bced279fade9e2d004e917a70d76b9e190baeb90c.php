<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6377949012686c2fb35a9bbbb3d40bdaec894898aa1277c91139703aae0503e9 extends Twig_Template
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
        $__internal_3391abeeb4267c10014068169804dace832da4f84a252f1bea02b53ec697fc06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3391abeeb4267c10014068169804dace832da4f84a252f1bea02b53ec697fc06->enter($__internal_3391abeeb4267c10014068169804dace832da4f84a252f1bea02b53ec697fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e7bd1fdfc1c707cb1f96ae67b4c7ff2266e5b48223313ed86c64fb007e935f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7bd1fdfc1c707cb1f96ae67b4c7ff2266e5b48223313ed86c64fb007e935f27->enter($__internal_e7bd1fdfc1c707cb1f96ae67b4c7ff2266e5b48223313ed86c64fb007e935f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3391abeeb4267c10014068169804dace832da4f84a252f1bea02b53ec697fc06->leave($__internal_3391abeeb4267c10014068169804dace832da4f84a252f1bea02b53ec697fc06_prof);

        
        $__internal_e7bd1fdfc1c707cb1f96ae67b4c7ff2266e5b48223313ed86c64fb007e935f27->leave($__internal_e7bd1fdfc1c707cb1f96ae67b4c7ff2266e5b48223313ed86c64fb007e935f27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
