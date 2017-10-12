<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_36ae62c78604677eaf5156a977a4c48f3132918ede3ecd17a601f8275dd91e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ae62c78604677eaf5156a977a4c48f3132918ede3ecd17a601f8275dd91e0c->enter($__internal_36ae62c78604677eaf5156a977a4c48f3132918ede3ecd17a601f8275dd91e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8a9f26a48246c10dcf334dc399fc09ec9f15ac4ee2dc89a8c9a216230a429624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9f26a48246c10dcf334dc399fc09ec9f15ac4ee2dc89a8c9a216230a429624->enter($__internal_8a9f26a48246c10dcf334dc399fc09ec9f15ac4ee2dc89a8c9a216230a429624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_36ae62c78604677eaf5156a977a4c48f3132918ede3ecd17a601f8275dd91e0c->leave($__internal_36ae62c78604677eaf5156a977a4c48f3132918ede3ecd17a601f8275dd91e0c_prof);

        
        $__internal_8a9f26a48246c10dcf334dc399fc09ec9f15ac4ee2dc89a8c9a216230a429624->leave($__internal_8a9f26a48246c10dcf334dc399fc09ec9f15ac4ee2dc89a8c9a216230a429624_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
