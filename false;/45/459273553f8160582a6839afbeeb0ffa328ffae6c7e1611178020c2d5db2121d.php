<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_6f717d92c044c5b12099c84da70d7c0b09ca6c656c5d8144198dd156fb77c8b7 extends Twig_Template
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
        $__internal_5c58b5e0f215aab877b4d16e9860a5431a640b192b3eadd9e9e7bf01c03a8a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c58b5e0f215aab877b4d16e9860a5431a640b192b3eadd9e9e7bf01c03a8a16->enter($__internal_5c58b5e0f215aab877b4d16e9860a5431a640b192b3eadd9e9e7bf01c03a8a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d7da59fe80b3a9cce9d3aec4cbbf6d52159087b01a14f6969ac0949f7266f051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7da59fe80b3a9cce9d3aec4cbbf6d52159087b01a14f6969ac0949f7266f051->enter($__internal_d7da59fe80b3a9cce9d3aec4cbbf6d52159087b01a14f6969ac0949f7266f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_5c58b5e0f215aab877b4d16e9860a5431a640b192b3eadd9e9e7bf01c03a8a16->leave($__internal_5c58b5e0f215aab877b4d16e9860a5431a640b192b3eadd9e9e7bf01c03a8a16_prof);

        
        $__internal_d7da59fe80b3a9cce9d3aec4cbbf6d52159087b01a14f6969ac0949f7266f051->leave($__internal_d7da59fe80b3a9cce9d3aec4cbbf6d52159087b01a14f6969ac0949f7266f051_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
