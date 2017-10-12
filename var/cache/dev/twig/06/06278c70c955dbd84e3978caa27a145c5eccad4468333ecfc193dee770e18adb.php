<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6a635858d4bb3ab38b30071a9daa1b633dc74026ba4f0fa14d3c39eb77a4952 extends Twig_Template
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
        $__internal_07b7bf411a9af090f05b8a8bb69fb92b3c0aae5ec93c93a0a44ba53f6d17966c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b7bf411a9af090f05b8a8bb69fb92b3c0aae5ec93c93a0a44ba53f6d17966c->enter($__internal_07b7bf411a9af090f05b8a8bb69fb92b3c0aae5ec93c93a0a44ba53f6d17966c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c3a6ce0a1e5a138eee7984620a342d874d96f7ab7acdbb5b0a907d8686897636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a6ce0a1e5a138eee7984620a342d874d96f7ab7acdbb5b0a907d8686897636->enter($__internal_c3a6ce0a1e5a138eee7984620a342d874d96f7ab7acdbb5b0a907d8686897636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_07b7bf411a9af090f05b8a8bb69fb92b3c0aae5ec93c93a0a44ba53f6d17966c->leave($__internal_07b7bf411a9af090f05b8a8bb69fb92b3c0aae5ec93c93a0a44ba53f6d17966c_prof);

        
        $__internal_c3a6ce0a1e5a138eee7984620a342d874d96f7ab7acdbb5b0a907d8686897636->leave($__internal_c3a6ce0a1e5a138eee7984620a342d874d96f7ab7acdbb5b0a907d8686897636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
