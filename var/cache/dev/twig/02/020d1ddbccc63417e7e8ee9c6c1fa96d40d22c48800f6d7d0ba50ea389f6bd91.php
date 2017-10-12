<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_c83d75c1cf5ac124859c0fe7c1f1f175a697101e6c8550ad1268c3be1eb80f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83d75c1cf5ac124859c0fe7c1f1f175a697101e6c8550ad1268c3be1eb80f86->enter($__internal_c83d75c1cf5ac124859c0fe7c1f1f175a697101e6c8550ad1268c3be1eb80f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_982ef12290ce0ddccfa9411409e7670edaede1be8d885cf168059db4bb913b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982ef12290ce0ddccfa9411409e7670edaede1be8d885cf168059db4bb913b11->enter($__internal_982ef12290ce0ddccfa9411409e7670edaede1be8d885cf168059db4bb913b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c83d75c1cf5ac124859c0fe7c1f1f175a697101e6c8550ad1268c3be1eb80f86->leave($__internal_c83d75c1cf5ac124859c0fe7c1f1f175a697101e6c8550ad1268c3be1eb80f86_prof);

        
        $__internal_982ef12290ce0ddccfa9411409e7670edaede1be8d885cf168059db4bb913b11->leave($__internal_982ef12290ce0ddccfa9411409e7670edaede1be8d885cf168059db4bb913b11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
