<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_bcaf22ec9ee4c03a458c5c954e6a0fbf39d36e81ccd64e17a8f742ae980418d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaf22ec9ee4c03a458c5c954e6a0fbf39d36e81ccd64e17a8f742ae980418d3->enter($__internal_bcaf22ec9ee4c03a458c5c954e6a0fbf39d36e81ccd64e17a8f742ae980418d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9b2aa14169f6c2ee7baee6dfba655ca24f3a8a75e6e7aadf35093a50491d7f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2aa14169f6c2ee7baee6dfba655ca24f3a8a75e6e7aadf35093a50491d7f5f->enter($__internal_9b2aa14169f6c2ee7baee6dfba655ca24f3a8a75e6e7aadf35093a50491d7f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_bcaf22ec9ee4c03a458c5c954e6a0fbf39d36e81ccd64e17a8f742ae980418d3->leave($__internal_bcaf22ec9ee4c03a458c5c954e6a0fbf39d36e81ccd64e17a8f742ae980418d3_prof);

        
        $__internal_9b2aa14169f6c2ee7baee6dfba655ca24f3a8a75e6e7aadf35093a50491d7f5f->leave($__internal_9b2aa14169f6c2ee7baee6dfba655ca24f3a8a75e6e7aadf35093a50491d7f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
