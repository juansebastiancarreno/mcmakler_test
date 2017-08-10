<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_75e4242ad21c7ddf793d29e7816632c254a1ea6842fb4b8d055f14de4a1e75a9 extends Twig_Template
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
        $__internal_1b11e11209e5717241f4f6d418df2a621892c934781652f6a7147209a2e3ff2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b11e11209e5717241f4f6d418df2a621892c934781652f6a7147209a2e3ff2d->enter($__internal_1b11e11209e5717241f4f6d418df2a621892c934781652f6a7147209a2e3ff2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_69194131b189074dad01f74074ef62c1ecb36c2a01f8f528f302686b5db32782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69194131b189074dad01f74074ef62c1ecb36c2a01f8f528f302686b5db32782->enter($__internal_69194131b189074dad01f74074ef62c1ecb36c2a01f8f528f302686b5db32782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1b11e11209e5717241f4f6d418df2a621892c934781652f6a7147209a2e3ff2d->leave($__internal_1b11e11209e5717241f4f6d418df2a621892c934781652f6a7147209a2e3ff2d_prof);

        
        $__internal_69194131b189074dad01f74074ef62c1ecb36c2a01f8f528f302686b5db32782->leave($__internal_69194131b189074dad01f74074ef62c1ecb36c2a01f8f528f302686b5db32782_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
