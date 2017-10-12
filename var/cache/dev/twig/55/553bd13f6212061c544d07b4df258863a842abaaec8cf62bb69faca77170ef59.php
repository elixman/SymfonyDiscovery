<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_441dc72c00987935a7f77fe6cfd54596c500a489d6767b252a3604eea00ddf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441dc72c00987935a7f77fe6cfd54596c500a489d6767b252a3604eea00ddf6c->enter($__internal_441dc72c00987935a7f77fe6cfd54596c500a489d6767b252a3604eea00ddf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4dfdd8f6cb30bf2f859fd7112a74041dafc8b51bcd276c27f02e41ed18077ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfdd8f6cb30bf2f859fd7112a74041dafc8b51bcd276c27f02e41ed18077ca0->enter($__internal_4dfdd8f6cb30bf2f859fd7112a74041dafc8b51bcd276c27f02e41ed18077ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_441dc72c00987935a7f77fe6cfd54596c500a489d6767b252a3604eea00ddf6c->leave($__internal_441dc72c00987935a7f77fe6cfd54596c500a489d6767b252a3604eea00ddf6c_prof);

        
        $__internal_4dfdd8f6cb30bf2f859fd7112a74041dafc8b51bcd276c27f02e41ed18077ca0->leave($__internal_4dfdd8f6cb30bf2f859fd7112a74041dafc8b51bcd276c27f02e41ed18077ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
