<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_bc10fc65446f6472fafd79bcd048b424b5df8c087e4f999a2c5aa8b86879cfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc10fc65446f6472fafd79bcd048b424b5df8c087e4f999a2c5aa8b86879cfc7->enter($__internal_bc10fc65446f6472fafd79bcd048b424b5df8c087e4f999a2c5aa8b86879cfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6a5f4a6774f45ab9bf0ae5bcfaafe150023e27c8e431416545167f8f0530d3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5f4a6774f45ab9bf0ae5bcfaafe150023e27c8e431416545167f8f0530d3cb->enter($__internal_6a5f4a6774f45ab9bf0ae5bcfaafe150023e27c8e431416545167f8f0530d3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_bc10fc65446f6472fafd79bcd048b424b5df8c087e4f999a2c5aa8b86879cfc7->leave($__internal_bc10fc65446f6472fafd79bcd048b424b5df8c087e4f999a2c5aa8b86879cfc7_prof);

        
        $__internal_6a5f4a6774f45ab9bf0ae5bcfaafe150023e27c8e431416545167f8f0530d3cb->leave($__internal_6a5f4a6774f45ab9bf0ae5bcfaafe150023e27c8e431416545167f8f0530d3cb_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
