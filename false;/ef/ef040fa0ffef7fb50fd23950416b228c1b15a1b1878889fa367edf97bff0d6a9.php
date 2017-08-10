<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_aa079b583e6d974bc77eba21ece48bc8303ed87f4201276fa39b4c7a29a06396 extends Twig_Template
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
        $__internal_1582ac530f2188808c890d132cbc76ecf610e4e56e308ff504f3e9f18a22a68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1582ac530f2188808c890d132cbc76ecf610e4e56e308ff504f3e9f18a22a68c->enter($__internal_1582ac530f2188808c890d132cbc76ecf610e4e56e308ff504f3e9f18a22a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_33264fd3999ff98efe90ac9d978691ac6a4f49fca6d8f0e4f49c5fbed7430b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33264fd3999ff98efe90ac9d978691ac6a4f49fca6d8f0e4f49c5fbed7430b48->enter($__internal_33264fd3999ff98efe90ac9d978691ac6a4f49fca6d8f0e4f49c5fbed7430b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1582ac530f2188808c890d132cbc76ecf610e4e56e308ff504f3e9f18a22a68c->leave($__internal_1582ac530f2188808c890d132cbc76ecf610e4e56e308ff504f3e9f18a22a68c_prof);

        
        $__internal_33264fd3999ff98efe90ac9d978691ac6a4f49fca6d8f0e4f49c5fbed7430b48->leave($__internal_33264fd3999ff98efe90ac9d978691ac6a4f49fca6d8f0e4f49c5fbed7430b48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
