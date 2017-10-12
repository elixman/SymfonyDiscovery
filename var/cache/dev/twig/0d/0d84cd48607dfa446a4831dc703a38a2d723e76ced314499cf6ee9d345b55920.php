<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_0121d18060acdaa2b00c01c93c7b08ac8cfdcd5827d63f51a1d68538a56f06ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0121d18060acdaa2b00c01c93c7b08ac8cfdcd5827d63f51a1d68538a56f06ee->enter($__internal_0121d18060acdaa2b00c01c93c7b08ac8cfdcd5827d63f51a1d68538a56f06ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_281f7a763b107c741dc40d3780c1ce2bf51db47be20b86fe5e62d2145d49defa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281f7a763b107c741dc40d3780c1ce2bf51db47be20b86fe5e62d2145d49defa->enter($__internal_281f7a763b107c741dc40d3780c1ce2bf51db47be20b86fe5e62d2145d49defa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0121d18060acdaa2b00c01c93c7b08ac8cfdcd5827d63f51a1d68538a56f06ee->leave($__internal_0121d18060acdaa2b00c01c93c7b08ac8cfdcd5827d63f51a1d68538a56f06ee_prof);

        
        $__internal_281f7a763b107c741dc40d3780c1ce2bf51db47be20b86fe5e62d2145d49defa->leave($__internal_281f7a763b107c741dc40d3780c1ce2bf51db47be20b86fe5e62d2145d49defa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
