<?php

/* core/themes/classy/templates/content-edit/file-managed-file.html.twig */
class __TwigTemplate_95f125e645a521493b8d42eef9aa65d18c99dc7ec9a30e952f667df74dfa320f extends Twig_Template
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
        // line 13
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/file"), "html", null, true);
        echo "
";
        // line 15
        $context["classes"] = array(0 => "js-form-managed-file", 1 => "form-managed-file");
        // line 20
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 21
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/file-managed-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 21,  25 => 20,  23 => 15,  19 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a file form widget.*/
/*  **/
/*  * Available variables:*/
/*  * - element: Form element for the file upload.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  **/
/*  * @see template_preprocess_file_managed_file()*/
/*  *//* */
/* #}*/
/* {{ attach_library('classy/file') }}*/
/* {%*/
/*   set classes = [*/
/*     'js-form-managed-file',*/
/*     'form-managed-file',*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/*   {{ element }}*/
/* </div>*/
/* */
