<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_f267eebf9e1d8f920892e8663050392bcf5346fdc82b3a447ddf09de1b4b6844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f267eebf9e1d8f920892e8663050392bcf5346fdc82b3a447ddf09de1b4b6844->enter($__internal_f267eebf9e1d8f920892e8663050392bcf5346fdc82b3a447ddf09de1b4b6844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_34c87212013b89cfe2c165e7e4be03ae730480ec882d2b093524af70978c0388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c87212013b89cfe2c165e7e4be03ae730480ec882d2b093524af70978c0388->enter($__internal_34c87212013b89cfe2c165e7e4be03ae730480ec882d2b093524af70978c0388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f267eebf9e1d8f920892e8663050392bcf5346fdc82b3a447ddf09de1b4b6844->leave($__internal_f267eebf9e1d8f920892e8663050392bcf5346fdc82b3a447ddf09de1b4b6844_prof);

        
        $__internal_34c87212013b89cfe2c165e7e4be03ae730480ec882d2b093524af70978c0388->leave($__internal_34c87212013b89cfe2c165e7e4be03ae730480ec882d2b093524af70978c0388_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/sylvainbarriere/Documents/htdocs/Websites/Symfony/SymfonyDiscovery/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
