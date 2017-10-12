<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_401908b6a5e333dd57ef055f048cc14de257e486d8f31978ab4c545d648a6b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_401908b6a5e333dd57ef055f048cc14de257e486d8f31978ab4c545d648a6b26->enter($__internal_401908b6a5e333dd57ef055f048cc14de257e486d8f31978ab4c545d648a6b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d298076dfa486b92f712e4d8fc913ae50cc0e54114a10cfb979f5f5a1a959eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d298076dfa486b92f712e4d8fc913ae50cc0e54114a10cfb979f5f5a1a959eab->enter($__internal_d298076dfa486b92f712e4d8fc913ae50cc0e54114a10cfb979f5f5a1a959eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_401908b6a5e333dd57ef055f048cc14de257e486d8f31978ab4c545d648a6b26->leave($__internal_401908b6a5e333dd57ef055f048cc14de257e486d8f31978ab4c545d648a6b26_prof);

        
        $__internal_d298076dfa486b92f712e4d8fc913ae50cc0e54114a10cfb979f5f5a1a959eab->leave($__internal_d298076dfa486b92f712e4d8fc913ae50cc0e54114a10cfb979f5f5a1a959eab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
