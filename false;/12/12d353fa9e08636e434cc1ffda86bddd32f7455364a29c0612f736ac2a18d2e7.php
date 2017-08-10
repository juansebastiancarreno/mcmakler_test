<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_29077721844e94c23def88fda6c80ec0e3c952d930724e6f1f2cdcecf978add2 extends Twig_Template
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
        $__internal_834f4d9248fdfb6268ec759336c0a15bd88f016e3a1cf5af855b29af6a9db5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834f4d9248fdfb6268ec759336c0a15bd88f016e3a1cf5af855b29af6a9db5a9->enter($__internal_834f4d9248fdfb6268ec759336c0a15bd88f016e3a1cf5af855b29af6a9db5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_10ca8d242555cd426ab9694fe8e54a73991c12ed5d792828cccfcf184812a0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ca8d242555cd426ab9694fe8e54a73991c12ed5d792828cccfcf184812a0a4->enter($__internal_10ca8d242555cd426ab9694fe8e54a73991c12ed5d792828cccfcf184812a0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_834f4d9248fdfb6268ec759336c0a15bd88f016e3a1cf5af855b29af6a9db5a9->leave($__internal_834f4d9248fdfb6268ec759336c0a15bd88f016e3a1cf5af855b29af6a9db5a9_prof);

        
        $__internal_10ca8d242555cd426ab9694fe8e54a73991c12ed5d792828cccfcf184812a0a4->leave($__internal_10ca8d242555cd426ab9694fe8e54a73991c12ed5d792828cccfcf184812a0a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/usr/local/var/www/vhosts/_localhost/php/neo/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
