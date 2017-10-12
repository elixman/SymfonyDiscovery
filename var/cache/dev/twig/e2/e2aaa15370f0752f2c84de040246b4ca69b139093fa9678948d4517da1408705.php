<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24f79e9a879a5aff6b292c39a18a31fd6280c85a16d19e23e64a6e0c67930f3a extends Twig_Template
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
        $__internal_5c642047ae4d4864792b1f16a52133ce49f7ce33e1d25e07e217d5f8d78a7dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c642047ae4d4864792b1f16a52133ce49f7ce33e1d25e07e217d5f8d78a7dfc->enter($__internal_5c642047ae4d4864792b1f16a52133ce49f7ce33e1d25e07e217d5f8d78a7dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a987a41c3f7f2d2bec9bacc4c91e1eaf22147f395c559c5bfe494659eecf44a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a987a41c3f7f2d2bec9bacc4c91e1eaf22147f395c559c5bfe494659eecf44a2->enter($__internal_a987a41c3f7f2d2bec9bacc4c91e1eaf22147f395c559c5bfe494659eecf44a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5c642047ae4d4864792b1f16a52133ce49f7ce33e1d25e07e217d5f8d78a7dfc->leave($__internal_5c642047ae4d4864792b1f16a52133ce49f7ce33e1d25e07e217d5f8d78a7dfc_prof);

        
        $__internal_a987a41c3f7f2d2bec9bacc4c91e1eaf22147f395c559c5bfe494659eecf44a2->leave($__internal_a987a41c3f7f2d2bec9bacc4c91e1eaf22147f395c559c5bfe494659eecf44a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
