<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_81081eeac795416c70f0a35687221f576370fce480809c095794aa20f45132d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81081eeac795416c70f0a35687221f576370fce480809c095794aa20f45132d3->enter($__internal_81081eeac795416c70f0a35687221f576370fce480809c095794aa20f45132d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4c1d5247881c2068c000ac627ff0bc5596d574d8e7a7ed20c4d790f82e6945fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1d5247881c2068c000ac627ff0bc5596d574d8e7a7ed20c4d790f82e6945fd->enter($__internal_4c1d5247881c2068c000ac627ff0bc5596d574d8e7a7ed20c4d790f82e6945fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_81081eeac795416c70f0a35687221f576370fce480809c095794aa20f45132d3->leave($__internal_81081eeac795416c70f0a35687221f576370fce480809c095794aa20f45132d3_prof);

        
        $__internal_4c1d5247881c2068c000ac627ff0bc5596d574d8e7a7ed20c4d790f82e6945fd->leave($__internal_4c1d5247881c2068c000ac627ff0bc5596d574d8e7a7ed20c4d790f82e6945fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
