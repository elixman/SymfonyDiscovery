<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_6c0755b72b8bef3c92dfeec59af50375a6ca5ff4451f47b65edf09c89081da81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0755b72b8bef3c92dfeec59af50375a6ca5ff4451f47b65edf09c89081da81->enter($__internal_6c0755b72b8bef3c92dfeec59af50375a6ca5ff4451f47b65edf09c89081da81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_8d4ea96d1d401a82657dc93028e092bc6a27755a90383b99406e3a995c590876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4ea96d1d401a82657dc93028e092bc6a27755a90383b99406e3a995c590876->enter($__internal_8d4ea96d1d401a82657dc93028e092bc6a27755a90383b99406e3a995c590876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6c0755b72b8bef3c92dfeec59af50375a6ca5ff4451f47b65edf09c89081da81->leave($__internal_6c0755b72b8bef3c92dfeec59af50375a6ca5ff4451f47b65edf09c89081da81_prof);

        
        $__internal_8d4ea96d1d401a82657dc93028e092bc6a27755a90383b99406e3a995c590876->leave($__internal_8d4ea96d1d401a82657dc93028e092bc6a27755a90383b99406e3a995c590876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
