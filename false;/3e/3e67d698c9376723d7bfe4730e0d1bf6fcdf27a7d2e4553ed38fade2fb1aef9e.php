<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f8917bfd17f2ea35b03d9f4393b7ac4d5203fb8c75696d516da42857878291d7 extends Twig_Template
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
        $__internal_edf2313ee14497b1332a0e1b05fd753fa16f7ba98d637e4aac258aa751f9e0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf2313ee14497b1332a0e1b05fd753fa16f7ba98d637e4aac258aa751f9e0a4->enter($__internal_edf2313ee14497b1332a0e1b05fd753fa16f7ba98d637e4aac258aa751f9e0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9f223f417209d1120da1984466d4ee80e9792112d32a082711d6f6ab5417a606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f223f417209d1120da1984466d4ee80e9792112d32a082711d6f6ab5417a606->enter($__internal_9f223f417209d1120da1984466d4ee80e9792112d32a082711d6f6ab5417a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_edf2313ee14497b1332a0e1b05fd753fa16f7ba98d637e4aac258aa751f9e0a4->leave($__internal_edf2313ee14497b1332a0e1b05fd753fa16f7ba98d637e4aac258aa751f9e0a4_prof);

        
        $__internal_9f223f417209d1120da1984466d4ee80e9792112d32a082711d6f6ab5417a606->leave($__internal_9f223f417209d1120da1984466d4ee80e9792112d32a082711d6f6ab5417a606_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
