<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_10d9f16166c90c1fb567a16fd1da916062d92fb8ce6fd30df96f8b78c53abc1b extends Twig_Template
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
        $__internal_86b25b1722bdbc0dd3184f247dc41511ea51f39a30080c34240201fb9d36f6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b25b1722bdbc0dd3184f247dc41511ea51f39a30080c34240201fb9d36f6dd->enter($__internal_86b25b1722bdbc0dd3184f247dc41511ea51f39a30080c34240201fb9d36f6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d04f842cc068406d4443344b4bdfa51b6ca6c7e1d823b4b0656d84d9b5ddbc8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04f842cc068406d4443344b4bdfa51b6ca6c7e1d823b4b0656d84d9b5ddbc8e->enter($__internal_d04f842cc068406d4443344b4bdfa51b6ca6c7e1d823b4b0656d84d9b5ddbc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_86b25b1722bdbc0dd3184f247dc41511ea51f39a30080c34240201fb9d36f6dd->leave($__internal_86b25b1722bdbc0dd3184f247dc41511ea51f39a30080c34240201fb9d36f6dd_prof);

        
        $__internal_d04f842cc068406d4443344b4bdfa51b6ca6c7e1d823b4b0656d84d9b5ddbc8e->leave($__internal_d04f842cc068406d4443344b4bdfa51b6ca6c7e1d823b4b0656d84d9b5ddbc8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
