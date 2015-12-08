<?php

/* themes/adaptivetheme/at_core/templates/block/block--system-main-block.html.twig */
class __TwigTemplate_27d6f957c8bb270fac9e1b835a863cb7b4a255003cd73df3fef6b111cd8e3cb5 extends Twig_Template
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
        // line 44
        $context["classes"] = array(0 => "block", 1 => "block-main-content");
        // line 49
        echo "<main";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo " role=\"main\">
  ";
        // line 50
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 51
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
        // line 52
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
</main>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-main-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 52,  30 => 51,  26 => 50,  21 => 49,  19 => 44,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display the main content block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - module: The module that provided this block plugin.*/
/*  *   - cache: The cache settings.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - block - The full block entity.*/
/*  *   - label_hidden: The hidden block title value if the block was*/
/*  *     configured to hide the title ('label' is empty in this case).*/
/*  *   - module: The module that generated the block.*/
/*  *   - delta: An ID for the block, unique within each module.*/
/*  *   - region: The block region embedding the current block.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  *   - class: Classes that can be used to style contextually through*/
/*  *     CSS. These can be manipulated through preprocess functions. The default*/
/*  *     values can be one or more of the following:*/
/*  *     - block: The current template type, i.e., "theming hook".*/
/*  *     - block-[module]: The module generating the block. For example, the user*/
/*  *       module is responsible for handling the default user navigation block.*/
/*  *       In that case the class would be 'block-user'.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-main-content'*/
/*   ]*/
/* %}*/
/* <main{{ attributes.addClass(classes) }} role="main">*/
/*   {{ title_prefix }}*/
/*   {{ content }}*/
/*   {{ title_suffix }}*/
/* </main>*/
/* */
