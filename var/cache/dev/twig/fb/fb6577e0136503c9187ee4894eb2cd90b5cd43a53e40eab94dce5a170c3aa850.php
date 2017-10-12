<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_d1ad5acffd8bb959a9e72fe9881f770ce33662c52d0b248bbcef838450e2fa3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ad5acffd8bb959a9e72fe9881f770ce33662c52d0b248bbcef838450e2fa3a->enter($__internal_d1ad5acffd8bb959a9e72fe9881f770ce33662c52d0b248bbcef838450e2fa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_26ec1664fad562bcede5b2925cd2788f97d606f23c1e37c690b6f96eb500707c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ec1664fad562bcede5b2925cd2788f97d606f23c1e37c690b6f96eb500707c->enter($__internal_26ec1664fad562bcede5b2925cd2788f97d606f23c1e37c690b6f96eb500707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1ad5acffd8bb959a9e72fe9881f770ce33662c52d0b248bbcef838450e2fa3a->leave($__internal_d1ad5acffd8bb959a9e72fe9881f770ce33662c52d0b248bbcef838450e2fa3a_prof);

        
        $__internal_26ec1664fad562bcede5b2925cd2788f97d606f23c1e37c690b6f96eb500707c->leave($__internal_26ec1664fad562bcede5b2925cd2788f97d606f23c1e37c690b6f96eb500707c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
