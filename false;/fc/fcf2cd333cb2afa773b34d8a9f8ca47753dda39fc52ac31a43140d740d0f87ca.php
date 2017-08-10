<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4dd38fb076dfaa2e0562fb082dbad720867d0f4749ea8c6914eed1fa20093c3e extends Twig_Template
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
        $__internal_9093d88d07990ba2489edc3d6c910d3cb3045b473bfa81c36e9401beb499cb7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9093d88d07990ba2489edc3d6c910d3cb3045b473bfa81c36e9401beb499cb7b->enter($__internal_9093d88d07990ba2489edc3d6c910d3cb3045b473bfa81c36e9401beb499cb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ddcd125dc863e73c82570828fb465677549b122a46b4cd2e39cb93e80b668185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcd125dc863e73c82570828fb465677549b122a46b4cd2e39cb93e80b668185->enter($__internal_ddcd125dc863e73c82570828fb465677549b122a46b4cd2e39cb93e80b668185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9093d88d07990ba2489edc3d6c910d3cb3045b473bfa81c36e9401beb499cb7b->leave($__internal_9093d88d07990ba2489edc3d6c910d3cb3045b473bfa81c36e9401beb499cb7b_prof);

        
        $__internal_ddcd125dc863e73c82570828fb465677549b122a46b4cd2e39cb93e80b668185->leave($__internal_ddcd125dc863e73c82570828fb465677549b122a46b4cd2e39cb93e80b668185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
