<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_fe42daf6f43b75d2fbbfaadd190548c9239e6f48c0a28990a248a73ac810d1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe42daf6f43b75d2fbbfaadd190548c9239e6f48c0a28990a248a73ac810d1ef->enter($__internal_fe42daf6f43b75d2fbbfaadd190548c9239e6f48c0a28990a248a73ac810d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0e107f442054db586f4de14f12325c15174ea5cf5985f1553f95813b52a82b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e107f442054db586f4de14f12325c15174ea5cf5985f1553f95813b52a82b81->enter($__internal_0e107f442054db586f4de14f12325c15174ea5cf5985f1553f95813b52a82b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe42daf6f43b75d2fbbfaadd190548c9239e6f48c0a28990a248a73ac810d1ef->leave($__internal_fe42daf6f43b75d2fbbfaadd190548c9239e6f48c0a28990a248a73ac810d1ef_prof);

        
        $__internal_0e107f442054db586f4de14f12325c15174ea5cf5985f1553f95813b52a82b81->leave($__internal_0e107f442054db586f4de14f12325c15174ea5cf5985f1553f95813b52a82b81_prof);

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
", "@Framework/Form/button_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
