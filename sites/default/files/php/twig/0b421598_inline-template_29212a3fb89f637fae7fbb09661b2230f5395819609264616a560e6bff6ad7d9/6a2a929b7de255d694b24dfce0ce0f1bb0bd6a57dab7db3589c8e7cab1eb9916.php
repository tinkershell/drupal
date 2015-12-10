<?php

/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ format_text }}"><span class="ckeditor-button-dropdown">{{ format_text }}<span class="ckeditor-button-arrow"></span></span></a> */
class __TwigTemplate_a3bcb4a76d98baecb30378c1867c0aea75d18cf970124986d8db5289253f7bbf extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format_text"]) ? $context["format_text"] : null), "html", null, true);
        echo "\"><span class=\"ckeditor-button-dropdown\">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["format_text"]) ? $context["format_text"] : null), "html", null, true);
        echo "<span class=\"ckeditor-button-arrow\"></span></span></a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ format_text }}\"><span class=\"ckeditor-button-dropdown\">{{ format_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>";
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
/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ format_text }}"><span class="ckeditor-button-dropdown">{{ format_text }}<span class="ckeditor-button-arrow"></span></span></a>*/
