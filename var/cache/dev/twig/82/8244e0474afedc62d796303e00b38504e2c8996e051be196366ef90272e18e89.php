<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_967ce5f371509b4a19d6f7c38ec57f184f25783ff5bc43dad1b6149ea288c4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967ce5f371509b4a19d6f7c38ec57f184f25783ff5bc43dad1b6149ea288c4dd->enter($__internal_967ce5f371509b4a19d6f7c38ec57f184f25783ff5bc43dad1b6149ea288c4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1ce10595571fca850f08612d71f48ad7d036fa736ce044c3b51b3ca237a8373f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce10595571fca850f08612d71f48ad7d036fa736ce044c3b51b3ca237a8373f->enter($__internal_1ce10595571fca850f08612d71f48ad7d036fa736ce044c3b51b3ca237a8373f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_967ce5f371509b4a19d6f7c38ec57f184f25783ff5bc43dad1b6149ea288c4dd->leave($__internal_967ce5f371509b4a19d6f7c38ec57f184f25783ff5bc43dad1b6149ea288c4dd_prof);

        
        $__internal_1ce10595571fca850f08612d71f48ad7d036fa736ce044c3b51b3ca237a8373f->leave($__internal_1ce10595571fca850f08612d71f48ad7d036fa736ce044c3b51b3ca237a8373f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
