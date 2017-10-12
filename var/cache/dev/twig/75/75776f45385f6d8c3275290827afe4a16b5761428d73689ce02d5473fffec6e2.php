<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_978bf44441f2e0b102afdd705a325997f3350e800a716d3424d8fc8cf453cdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978bf44441f2e0b102afdd705a325997f3350e800a716d3424d8fc8cf453cdb8->enter($__internal_978bf44441f2e0b102afdd705a325997f3350e800a716d3424d8fc8cf453cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d904a09d033fc1205406b3fdbb564da7c2b586af17594b5285f040124e1f11d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d904a09d033fc1205406b3fdbb564da7c2b586af17594b5285f040124e1f11d9->enter($__internal_d904a09d033fc1205406b3fdbb564da7c2b586af17594b5285f040124e1f11d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_978bf44441f2e0b102afdd705a325997f3350e800a716d3424d8fc8cf453cdb8->leave($__internal_978bf44441f2e0b102afdd705a325997f3350e800a716d3424d8fc8cf453cdb8_prof);

        
        $__internal_d904a09d033fc1205406b3fdbb564da7c2b586af17594b5285f040124e1f11d9->leave($__internal_d904a09d033fc1205406b3fdbb564da7c2b586af17594b5285f040124e1f11d9_prof);

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
", "@Framework/Form/container_attributes.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
