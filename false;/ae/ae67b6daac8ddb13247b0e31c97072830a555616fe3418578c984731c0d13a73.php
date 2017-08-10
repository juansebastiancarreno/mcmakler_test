<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_3e5bfe7b82d7dc192440ef058f5f9908b374f0d23c265e5c221235410d618c89 extends Twig_Template
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
        $__internal_c5894a360493162d1cc8e018ee600758bdfd34fa048965eff3dec41af142270a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5894a360493162d1cc8e018ee600758bdfd34fa048965eff3dec41af142270a->enter($__internal_c5894a360493162d1cc8e018ee600758bdfd34fa048965eff3dec41af142270a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_610b654e0b3db15bb684a4a523161564c238acf4fba3d6ca097a59bd513e87b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610b654e0b3db15bb684a4a523161564c238acf4fba3d6ca097a59bd513e87b7->enter($__internal_610b654e0b3db15bb684a4a523161564c238acf4fba3d6ca097a59bd513e87b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c5894a360493162d1cc8e018ee600758bdfd34fa048965eff3dec41af142270a->leave($__internal_c5894a360493162d1cc8e018ee600758bdfd34fa048965eff3dec41af142270a_prof);

        
        $__internal_610b654e0b3db15bb684a4a523161564c238acf4fba3d6ca097a59bd513e87b7->leave($__internal_610b654e0b3db15bb684a4a523161564c238acf4fba3d6ca097a59bd513e87b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
