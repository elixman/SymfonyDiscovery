<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_cf4288f5f4c8ab2acaf401158069fd274064e94d3fc48a58d07b0bd51e7c7de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4288f5f4c8ab2acaf401158069fd274064e94d3fc48a58d07b0bd51e7c7de2->enter($__internal_cf4288f5f4c8ab2acaf401158069fd274064e94d3fc48a58d07b0bd51e7c7de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_bd5abe15f5b5731414723d29f98c35da0fd9f8f71d70e5758dfd435dfa3ce2a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5abe15f5b5731414723d29f98c35da0fd9f8f71d70e5758dfd435dfa3ce2a6->enter($__internal_bd5abe15f5b5731414723d29f98c35da0fd9f8f71d70e5758dfd435dfa3ce2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_cf4288f5f4c8ab2acaf401158069fd274064e94d3fc48a58d07b0bd51e7c7de2->leave($__internal_cf4288f5f4c8ab2acaf401158069fd274064e94d3fc48a58d07b0bd51e7c7de2_prof);

        
        $__internal_bd5abe15f5b5731414723d29f98c35da0fd9f8f71d70e5758dfd435dfa3ce2a6->leave($__internal_bd5abe15f5b5731414723d29f98c35da0fd9f8f71d70e5758dfd435dfa3ce2a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
