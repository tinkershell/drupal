<?php

/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ styles_text }}"><span class="ckeditor-button-dropdown">{{ styles_text }}<span class="ckeditor-button-arrow"></span></span></a> */
class __TwigTemplate_abdb5ffac7e1a57506503cd91a4e46cb549570fd842017c73481bcb01f49f72f extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles_text"]) ? $context["styles_text"] : null), "html", null, true);
        echo "\"><span class=\"ckeditor-button-dropdown\">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["styles_text"]) ? $context["styles_text"] : null), "html", null, true);
        echo "<span class=\"ckeditor-button-arrow\"></span></span></a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#\" role=\"button\" aria-label=\"{{ styles_text }}\"><span class=\"ckeditor-button-dropdown\">{{ styles_text }}<span class=\"ckeditor-button-arrow\"></span></span></a>";
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
/* {# inline_template_start #}<a href="#" role="button" aria-label="{{ styles_text }}"><span class="ckeditor-button-dropdown">{{ styles_text }}<span class="ckeditor-button-arrow"></span></span></a>*/
