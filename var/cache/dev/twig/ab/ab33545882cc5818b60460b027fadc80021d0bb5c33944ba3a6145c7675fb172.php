<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_e380e72527f1a25354b084955dfea1d367bcf6aa926cdd0a5eeb3782ef91ada6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e380e72527f1a25354b084955dfea1d367bcf6aa926cdd0a5eeb3782ef91ada6->enter($__internal_e380e72527f1a25354b084955dfea1d367bcf6aa926cdd0a5eeb3782ef91ada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e205d9bc57159490a01e31c43cff4ce949114785da7b83c1b468fddf05b89262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e205d9bc57159490a01e31c43cff4ce949114785da7b83c1b468fddf05b89262->enter($__internal_e205d9bc57159490a01e31c43cff4ce949114785da7b83c1b468fddf05b89262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e380e72527f1a25354b084955dfea1d367bcf6aa926cdd0a5eeb3782ef91ada6->leave($__internal_e380e72527f1a25354b084955dfea1d367bcf6aa926cdd0a5eeb3782ef91ada6_prof);

        
        $__internal_e205d9bc57159490a01e31c43cff4ce949114785da7b83c1b468fddf05b89262->leave($__internal_e205d9bc57159490a01e31c43cff4ce949114785da7b83c1b468fddf05b89262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
