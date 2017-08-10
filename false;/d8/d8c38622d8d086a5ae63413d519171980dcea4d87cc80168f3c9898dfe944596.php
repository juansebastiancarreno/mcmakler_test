<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_992c91314a14f29a21d302a9d6bdb0f1dffac10af446de3876351da39d9db7f1 extends Twig_Template
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
        $__internal_921b7eb9ef82098dcabc97ecae1d629e2ce6bacd2c211b201bc7a7343cd976b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921b7eb9ef82098dcabc97ecae1d629e2ce6bacd2c211b201bc7a7343cd976b5->enter($__internal_921b7eb9ef82098dcabc97ecae1d629e2ce6bacd2c211b201bc7a7343cd976b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_11cdcf09c9970979de945e97361d7659f2e2e071156fd84e3ddf8fff8b82f013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cdcf09c9970979de945e97361d7659f2e2e071156fd84e3ddf8fff8b82f013->enter($__internal_11cdcf09c9970979de945e97361d7659f2e2e071156fd84e3ddf8fff8b82f013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_921b7eb9ef82098dcabc97ecae1d629e2ce6bacd2c211b201bc7a7343cd976b5->leave($__internal_921b7eb9ef82098dcabc97ecae1d629e2ce6bacd2c211b201bc7a7343cd976b5_prof);

        
        $__internal_11cdcf09c9970979de945e97361d7659f2e2e071156fd84e3ddf8fff8b82f013->leave($__internal_11cdcf09c9970979de945e97361d7659f2e2e071156fd84e3ddf8fff8b82f013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
