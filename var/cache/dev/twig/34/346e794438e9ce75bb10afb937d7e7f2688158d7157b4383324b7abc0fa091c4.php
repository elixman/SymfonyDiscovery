<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_b4bde5e53d561ea788fa54186fecfaa1366d4703fc3e79e83de59f30935aff7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bde5e53d561ea788fa54186fecfaa1366d4703fc3e79e83de59f30935aff7d->enter($__internal_b4bde5e53d561ea788fa54186fecfaa1366d4703fc3e79e83de59f30935aff7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b8deca9be78ddde1eccc1368ee2e2fbb43ff952dbb2bdb1a1ad0108699306b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8deca9be78ddde1eccc1368ee2e2fbb43ff952dbb2bdb1a1ad0108699306b52->enter($__internal_b8deca9be78ddde1eccc1368ee2e2fbb43ff952dbb2bdb1a1ad0108699306b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b4bde5e53d561ea788fa54186fecfaa1366d4703fc3e79e83de59f30935aff7d->leave($__internal_b4bde5e53d561ea788fa54186fecfaa1366d4703fc3e79e83de59f30935aff7d_prof);

        
        $__internal_b8deca9be78ddde1eccc1368ee2e2fbb43ff952dbb2bdb1a1ad0108699306b52->leave($__internal_b8deca9be78ddde1eccc1368ee2e2fbb43ff952dbb2bdb1a1ad0108699306b52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
