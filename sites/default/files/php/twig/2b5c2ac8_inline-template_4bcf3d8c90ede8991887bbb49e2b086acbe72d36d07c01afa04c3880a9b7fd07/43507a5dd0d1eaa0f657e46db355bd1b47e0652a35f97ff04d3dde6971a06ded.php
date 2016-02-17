<?php

/* {# inline_template_start #}{{ title__value }} */
class __TwigTemplate_433453044b6e8b7f8c6e0564ef7499c152da5734d6715684b3ff705b3c9dc3ed extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title__value"]) ? $context["title__value"] : null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{{ title__value }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {# inline_template_start #}{{ title__value }}*/
