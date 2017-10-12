<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_9ae83843286ccfa2ca696ddc0e75fd1f1a0ab405bb99f6c5cfe01e58f5ea60a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae83843286ccfa2ca696ddc0e75fd1f1a0ab405bb99f6c5cfe01e58f5ea60a2->enter($__internal_9ae83843286ccfa2ca696ddc0e75fd1f1a0ab405bb99f6c5cfe01e58f5ea60a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f0762de1eec9dd8c02c5dda876a1570d91d893901c420ae55d3cf5575467a833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0762de1eec9dd8c02c5dda876a1570d91d893901c420ae55d3cf5575467a833->enter($__internal_f0762de1eec9dd8c02c5dda876a1570d91d893901c420ae55d3cf5575467a833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9ae83843286ccfa2ca696ddc0e75fd1f1a0ab405bb99f6c5cfe01e58f5ea60a2->leave($__internal_9ae83843286ccfa2ca696ddc0e75fd1f1a0ab405bb99f6c5cfe01e58f5ea60a2_prof);

        
        $__internal_f0762de1eec9dd8c02c5dda876a1570d91d893901c420ae55d3cf5575467a833->leave($__internal_f0762de1eec9dd8c02c5dda876a1570d91d893901c420ae55d3cf5575467a833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
