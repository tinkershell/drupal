<?php

/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ button_separator_text }}" class="ckeditor-separator"></a> */
class __TwigTemplate_ccebd9f03dea86296ed5614b7414711c58b47ab230ad1ad32bf3e9e19647e238 extends Twig_Template
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
        echo "<a href=\"#\" role=\"button\" aria-label=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["button_separator_text"]) ? $context["button_separator_text"] : null), "html", null, true);
        echo "\" class=\"ckeditor-separator\"></a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ button_separator_text }}\" class=\"ckeditor-separator\"></a>";
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
/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ button_separator_text }}" class="ckeditor-separator"></a>*/
