<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_e2c19dc29e73d6ed5802607929e4e2ae7687296a373f8d352a25e6511724d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c19dc29e73d6ed5802607929e4e2ae7687296a373f8d352a25e6511724d66a->enter($__internal_e2c19dc29e73d6ed5802607929e4e2ae7687296a373f8d352a25e6511724d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5865887d8bc305ac229c238247286012bf7bc731e72be85cd983dac26a20bc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5865887d8bc305ac229c238247286012bf7bc731e72be85cd983dac26a20bc00->enter($__internal_5865887d8bc305ac229c238247286012bf7bc731e72be85cd983dac26a20bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e2c19dc29e73d6ed5802607929e4e2ae7687296a373f8d352a25e6511724d66a->leave($__internal_e2c19dc29e73d6ed5802607929e4e2ae7687296a373f8d352a25e6511724d66a_prof);

        
        $__internal_5865887d8bc305ac229c238247286012bf7bc731e72be85cd983dac26a20bc00->leave($__internal_5865887d8bc305ac229c238247286012bf7bc731e72be85cd983dac26a20bc00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
