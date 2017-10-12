<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_d271b866724ff3267399b7b9b1dab128d6c9a27cfcd07ddec014aee30ad22d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d271b866724ff3267399b7b9b1dab128d6c9a27cfcd07ddec014aee30ad22d6a->enter($__internal_d271b866724ff3267399b7b9b1dab128d6c9a27cfcd07ddec014aee30ad22d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_696cefd3e2ba91858616f363639f49ca6a0dcb83c46237f4f413e2c8eedd5414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696cefd3e2ba91858616f363639f49ca6a0dcb83c46237f4f413e2c8eedd5414->enter($__internal_696cefd3e2ba91858616f363639f49ca6a0dcb83c46237f4f413e2c8eedd5414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d271b866724ff3267399b7b9b1dab128d6c9a27cfcd07ddec014aee30ad22d6a->leave($__internal_d271b866724ff3267399b7b9b1dab128d6c9a27cfcd07ddec014aee30ad22d6a_prof);

        
        $__internal_696cefd3e2ba91858616f363639f49ca6a0dcb83c46237f4f413e2c8eedd5414->leave($__internal_696cefd3e2ba91858616f363639f49ca6a0dcb83c46237f4f413e2c8eedd5414_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
