<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_3227e7db43939fdd011618e2d5a55b281763a56aa16a2de8532054922c6ba7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3227e7db43939fdd011618e2d5a55b281763a56aa16a2de8532054922c6ba7b4->enter($__internal_3227e7db43939fdd011618e2d5a55b281763a56aa16a2de8532054922c6ba7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f75fbfa0c9a645ae027fd5e63c80e447b38dd5ce7b2889ab49e380bdaf0e6261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75fbfa0c9a645ae027fd5e63c80e447b38dd5ce7b2889ab49e380bdaf0e6261->enter($__internal_f75fbfa0c9a645ae027fd5e63c80e447b38dd5ce7b2889ab49e380bdaf0e6261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3227e7db43939fdd011618e2d5a55b281763a56aa16a2de8532054922c6ba7b4->leave($__internal_3227e7db43939fdd011618e2d5a55b281763a56aa16a2de8532054922c6ba7b4_prof);

        
        $__internal_f75fbfa0c9a645ae027fd5e63c80e447b38dd5ce7b2889ab49e380bdaf0e6261->leave($__internal_f75fbfa0c9a645ae027fd5e63c80e447b38dd5ce7b2889ab49e380bdaf0e6261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
