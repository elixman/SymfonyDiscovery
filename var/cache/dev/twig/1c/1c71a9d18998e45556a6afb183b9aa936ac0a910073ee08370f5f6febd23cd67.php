<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_894360e731b2d81564315c07ae39543f69e5887cf9f5d04a1ee3d0e691703c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894360e731b2d81564315c07ae39543f69e5887cf9f5d04a1ee3d0e691703c31->enter($__internal_894360e731b2d81564315c07ae39543f69e5887cf9f5d04a1ee3d0e691703c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_919646f660239aabac4ba0b5d13a8190b927b80f394bbb1a4905bcb479181463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919646f660239aabac4ba0b5d13a8190b927b80f394bbb1a4905bcb479181463->enter($__internal_919646f660239aabac4ba0b5d13a8190b927b80f394bbb1a4905bcb479181463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_894360e731b2d81564315c07ae39543f69e5887cf9f5d04a1ee3d0e691703c31->leave($__internal_894360e731b2d81564315c07ae39543f69e5887cf9f5d04a1ee3d0e691703c31_prof);

        
        $__internal_919646f660239aabac4ba0b5d13a8190b927b80f394bbb1a4905bcb479181463->leave($__internal_919646f660239aabac4ba0b5d13a8190b927b80f394bbb1a4905bcb479181463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
