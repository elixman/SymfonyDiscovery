<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_a22c87dab73b66187efbed4af981a78635e44bc7cab7528c09d675c2dfa3cfd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22c87dab73b66187efbed4af981a78635e44bc7cab7528c09d675c2dfa3cfd5->enter($__internal_a22c87dab73b66187efbed4af981a78635e44bc7cab7528c09d675c2dfa3cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_70442f7f6e5e973fd9defa5a17607664a3dd90577f0ad8ec1c230f8a8fd75dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70442f7f6e5e973fd9defa5a17607664a3dd90577f0ad8ec1c230f8a8fd75dac->enter($__internal_70442f7f6e5e973fd9defa5a17607664a3dd90577f0ad8ec1c230f8a8fd75dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a22c87dab73b66187efbed4af981a78635e44bc7cab7528c09d675c2dfa3cfd5->leave($__internal_a22c87dab73b66187efbed4af981a78635e44bc7cab7528c09d675c2dfa3cfd5_prof);

        
        $__internal_70442f7f6e5e973fd9defa5a17607664a3dd90577f0ad8ec1c230f8a8fd75dac->leave($__internal_70442f7f6e5e973fd9defa5a17607664a3dd90577f0ad8ec1c230f8a8fd75dac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
