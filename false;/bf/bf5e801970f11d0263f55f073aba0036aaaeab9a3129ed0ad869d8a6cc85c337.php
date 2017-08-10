<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_64d9b66d1029b8af2d9af2905af89599028fbb4e5c428470e073a962ee383179 extends Twig_Template
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
        $__internal_2a3c9e7bbfc3d204a48e8a56ef56cee44d1d4f3829dd3c2d89718db337c0d583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3c9e7bbfc3d204a48e8a56ef56cee44d1d4f3829dd3c2d89718db337c0d583->enter($__internal_2a3c9e7bbfc3d204a48e8a56ef56cee44d1d4f3829dd3c2d89718db337c0d583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_026ec7dc9814698feb3f347c16afe2a84bad38fd2938845604d604562e3f5dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026ec7dc9814698feb3f347c16afe2a84bad38fd2938845604d604562e3f5dfe->enter($__internal_026ec7dc9814698feb3f347c16afe2a84bad38fd2938845604d604562e3f5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2a3c9e7bbfc3d204a48e8a56ef56cee44d1d4f3829dd3c2d89718db337c0d583->leave($__internal_2a3c9e7bbfc3d204a48e8a56ef56cee44d1d4f3829dd3c2d89718db337c0d583_prof);

        
        $__internal_026ec7dc9814698feb3f347c16afe2a84bad38fd2938845604d604562e3f5dfe->leave($__internal_026ec7dc9814698feb3f347c16afe2a84bad38fd2938845604d604562e3f5dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
