<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_98f2da826383d8aa04ce58c4a0b4c80e3c5f2858fe5c207c6d1a4bb6dabdb568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec17ff638ee54ee30fe7a10bfa2fb5196e5682c8df867f4960c34bb3bdc4fdda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec17ff638ee54ee30fe7a10bfa2fb5196e5682c8df867f4960c34bb3bdc4fdda->enter($__internal_ec17ff638ee54ee30fe7a10bfa2fb5196e5682c8df867f4960c34bb3bdc4fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ac6cceeaa914860fbd9ad9f5cb3e315e0a52753a967613b92dc7e15c3fbfacb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6cceeaa914860fbd9ad9f5cb3e315e0a52753a967613b92dc7e15c3fbfacb7->enter($__internal_ac6cceeaa914860fbd9ad9f5cb3e315e0a52753a967613b92dc7e15c3fbfacb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec17ff638ee54ee30fe7a10bfa2fb5196e5682c8df867f4960c34bb3bdc4fdda->leave($__internal_ec17ff638ee54ee30fe7a10bfa2fb5196e5682c8df867f4960c34bb3bdc4fdda_prof);

        
        $__internal_ac6cceeaa914860fbd9ad9f5cb3e315e0a52753a967613b92dc7e15c3fbfacb7->leave($__internal_ac6cceeaa914860fbd9ad9f5cb3e315e0a52753a967613b92dc7e15c3fbfacb7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_645bde63ba62c0ca8e4bb0719b5f782cc927c98517df7fbd9238685dcf448b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645bde63ba62c0ca8e4bb0719b5f782cc927c98517df7fbd9238685dcf448b9d->enter($__internal_645bde63ba62c0ca8e4bb0719b5f782cc927c98517df7fbd9238685dcf448b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af08f2a88dcc296fc107384cc0ee1ef2d721ba18175af425f1a44abc8cd5114a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af08f2a88dcc296fc107384cc0ee1ef2d721ba18175af425f1a44abc8cd5114a->enter($__internal_af08f2a88dcc296fc107384cc0ee1ef2d721ba18175af425f1a44abc8cd5114a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af08f2a88dcc296fc107384cc0ee1ef2d721ba18175af425f1a44abc8cd5114a->leave($__internal_af08f2a88dcc296fc107384cc0ee1ef2d721ba18175af425f1a44abc8cd5114a_prof);

        
        $__internal_645bde63ba62c0ca8e4bb0719b5f782cc927c98517df7fbd9238685dcf448b9d->leave($__internal_645bde63ba62c0ca8e4bb0719b5f782cc927c98517df7fbd9238685dcf448b9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
