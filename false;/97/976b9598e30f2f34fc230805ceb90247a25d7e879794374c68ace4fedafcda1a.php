<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d95ccd3a37dd3c55196ed551334190a73536d5b208a2889e75196e8190d71cb2 extends Twig_Template
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
        $__internal_a1281ced678b4dae2a298298f7699c99a2d56d3c4dff831bd056eb58cabbac46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1281ced678b4dae2a298298f7699c99a2d56d3c4dff831bd056eb58cabbac46->enter($__internal_a1281ced678b4dae2a298298f7699c99a2d56d3c4dff831bd056eb58cabbac46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d0d982aa2934b0eee9a18413b3e4bcec96236891156eb5cf1f468a982be9ae9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d982aa2934b0eee9a18413b3e4bcec96236891156eb5cf1f468a982be9ae9e->enter($__internal_d0d982aa2934b0eee9a18413b3e4bcec96236891156eb5cf1f468a982be9ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a1281ced678b4dae2a298298f7699c99a2d56d3c4dff831bd056eb58cabbac46->leave($__internal_a1281ced678b4dae2a298298f7699c99a2d56d3c4dff831bd056eb58cabbac46_prof);

        
        $__internal_d0d982aa2934b0eee9a18413b3e4bcec96236891156eb5cf1f468a982be9ae9e->leave($__internal_d0d982aa2934b0eee9a18413b3e4bcec96236891156eb5cf1f468a982be9ae9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
