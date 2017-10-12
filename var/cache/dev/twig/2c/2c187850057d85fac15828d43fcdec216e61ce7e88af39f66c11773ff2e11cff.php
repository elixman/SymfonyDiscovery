<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_05672d2121ba61f036c6096e1b2da24ebfc9413ee9ef5e3b82e84d27b42bb1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05672d2121ba61f036c6096e1b2da24ebfc9413ee9ef5e3b82e84d27b42bb1de->enter($__internal_05672d2121ba61f036c6096e1b2da24ebfc9413ee9ef5e3b82e84d27b42bb1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b550b975138f67c471941383488ee18fd700fe1dd3a2a51fb67cfbf32f3ce1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b550b975138f67c471941383488ee18fd700fe1dd3a2a51fb67cfbf32f3ce1f9->enter($__internal_b550b975138f67c471941383488ee18fd700fe1dd3a2a51fb67cfbf32f3ce1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_05672d2121ba61f036c6096e1b2da24ebfc9413ee9ef5e3b82e84d27b42bb1de->leave($__internal_05672d2121ba61f036c6096e1b2da24ebfc9413ee9ef5e3b82e84d27b42bb1de_prof);

        
        $__internal_b550b975138f67c471941383488ee18fd700fe1dd3a2a51fb67cfbf32f3ce1f9->leave($__internal_b550b975138f67c471941383488ee18fd700fe1dd3a2a51fb67cfbf32f3ce1f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
