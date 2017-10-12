<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_c3fc3e2e25bd2df214602c352647ce5e4fcae98bdcfee956f2f50d8412da8b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3fc3e2e25bd2df214602c352647ce5e4fcae98bdcfee956f2f50d8412da8b30->enter($__internal_c3fc3e2e25bd2df214602c352647ce5e4fcae98bdcfee956f2f50d8412da8b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_6bdbc95b7ee759fc2e95c0e04d21f17ff0ae53aef258d2095da2af146b6a82da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdbc95b7ee759fc2e95c0e04d21f17ff0ae53aef258d2095da2af146b6a82da->enter($__internal_6bdbc95b7ee759fc2e95c0e04d21f17ff0ae53aef258d2095da2af146b6a82da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c3fc3e2e25bd2df214602c352647ce5e4fcae98bdcfee956f2f50d8412da8b30->leave($__internal_c3fc3e2e25bd2df214602c352647ce5e4fcae98bdcfee956f2f50d8412da8b30_prof);

        
        $__internal_6bdbc95b7ee759fc2e95c0e04d21f17ff0ae53aef258d2095da2af146b6a82da->leave($__internal_6bdbc95b7ee759fc2e95c0e04d21f17ff0ae53aef258d2095da2af146b6a82da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
