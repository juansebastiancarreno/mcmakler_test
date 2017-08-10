<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_c76f71cd860535bc04f9bd40aab05c357a592259d9f6c8002f567bb6083fef19 extends Twig_Template
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
        $__internal_169ed456109d264a6bbb21c418f725935da975ebb2cc594e5f184c6c1743967c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169ed456109d264a6bbb21c418f725935da975ebb2cc594e5f184c6c1743967c->enter($__internal_169ed456109d264a6bbb21c418f725935da975ebb2cc594e5f184c6c1743967c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_8c92cedab59489eedf8338a963ff8be4d7384cec13f809939d5eb27521d38b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c92cedab59489eedf8338a963ff8be4d7384cec13f809939d5eb27521d38b02->enter($__internal_8c92cedab59489eedf8338a963ff8be4d7384cec13f809939d5eb27521d38b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_169ed456109d264a6bbb21c418f725935da975ebb2cc594e5f184c6c1743967c->leave($__internal_169ed456109d264a6bbb21c418f725935da975ebb2cc594e5f184c6c1743967c_prof);

        
        $__internal_8c92cedab59489eedf8338a963ff8be4d7384cec13f809939d5eb27521d38b02->leave($__internal_8c92cedab59489eedf8338a963ff8be4d7384cec13f809939d5eb27521d38b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
