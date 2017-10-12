<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_bf810daf0921c877d1b83053def70abe5af6c41896ac56a5ff68e8cdfcd88a7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf810daf0921c877d1b83053def70abe5af6c41896ac56a5ff68e8cdfcd88a7a->enter($__internal_bf810daf0921c877d1b83053def70abe5af6c41896ac56a5ff68e8cdfcd88a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3d38b80290bb6ab974e64d3d430d793eeba313b6e3f4917c7d10f6c4e2c7dc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d38b80290bb6ab974e64d3d430d793eeba313b6e3f4917c7d10f6c4e2c7dc9b->enter($__internal_3d38b80290bb6ab974e64d3d430d793eeba313b6e3f4917c7d10f6c4e2c7dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bf810daf0921c877d1b83053def70abe5af6c41896ac56a5ff68e8cdfcd88a7a->leave($__internal_bf810daf0921c877d1b83053def70abe5af6c41896ac56a5ff68e8cdfcd88a7a_prof);

        
        $__internal_3d38b80290bb6ab974e64d3d430d793eeba313b6e3f4917c7d10f6c4e2c7dc9b->leave($__internal_3d38b80290bb6ab974e64d3d430d793eeba313b6e3f4917c7d10f6c4e2c7dc9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
