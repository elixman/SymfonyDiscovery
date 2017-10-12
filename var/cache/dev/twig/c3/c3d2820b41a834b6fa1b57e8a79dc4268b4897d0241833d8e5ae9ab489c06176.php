<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_22a43cb81a8dc2f186fec5e9e2fed42ddc18c8ab182076c026ccd2658697cf3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a43cb81a8dc2f186fec5e9e2fed42ddc18c8ab182076c026ccd2658697cf3a->enter($__internal_22a43cb81a8dc2f186fec5e9e2fed42ddc18c8ab182076c026ccd2658697cf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_29ccb4e9ebdac8b8342e4489d6db3b3a0ea1e3499efa703fe43deb7e4aaa531f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ccb4e9ebdac8b8342e4489d6db3b3a0ea1e3499efa703fe43deb7e4aaa531f->enter($__internal_29ccb4e9ebdac8b8342e4489d6db3b3a0ea1e3499efa703fe43deb7e4aaa531f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_22a43cb81a8dc2f186fec5e9e2fed42ddc18c8ab182076c026ccd2658697cf3a->leave($__internal_22a43cb81a8dc2f186fec5e9e2fed42ddc18c8ab182076c026ccd2658697cf3a_prof);

        
        $__internal_29ccb4e9ebdac8b8342e4489d6db3b3a0ea1e3499efa703fe43deb7e4aaa531f->leave($__internal_29ccb4e9ebdac8b8342e4489d6db3b3a0ea1e3499efa703fe43deb7e4aaa531f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
