<?php

/* themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_cdb9f7b6141a595672d911898448a198f36d3f8085ad7eb2fd8714309d249717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 39
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 42
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 43
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 4 => ((        // line 44
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 47
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "removeClass", array(0 => "container-inline"), "method"), "html", null, true);
        echo ">
  <div class=\"block__inner block-search__inner\">

    ";
        // line 50
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 51
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 52
            echo "      <h2";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title"), "method"), "html", null, true);
            echo "><span>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</span></h2>
    ";
        }
        // line 54
        echo "    ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "
  </div>
</div>
";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "      <div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-search__content"), "method"), "html", null, true);
        echo ">
        ";
        // line 58
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 58,  64 => 57,  61 => 56,  54 => 61,  52 => 56,  46 => 54,  38 => 52,  36 => 51,  32 => 50,  25 => 47,  23 => 44,  22 => 43,  21 => 42,  20 => 39,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display the search block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values, including:*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - module: The module that provided this block plugin.*/
/*  *   - cache: The cache settings.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - block - The full block entity, including:*/
/*  *   - label_hidden: The hidden block title value if the block was*/
/*  *     configured to hide the title ('label' is empty in this case).*/
/*  *   - module: The module that generated the block.*/
/*  *   - delta: An ID for the block, unique within each module.*/
/*  *   - region: The block region embedding the current block.*/
/*  * - content: The content of this block.*/
/*  * - attributes: A list HTML attributes populated by modules, intended to*/
/*  *   be added to the main container tag of this template. Includes:*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * @see template_preprocess_block()*/
/*  * @see search_preprocess_block()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-search',*/
/*     'block-' ~ configuration.provider|clean_class,*/
/*     'block-' ~ plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes).removeClass('container-inline') }}>*/
/*   <div class="block__inner block-search__inner">*/
/* */
/*     {{ title_prefix }}*/
/*     {% if label %}*/
/*       <h2{{ title_attributes.addClass('block__title') }}><span>{{ label }}</span></h2>*/
/*     {% endif %}*/
/*     {{ title_suffix }}*/
/* */
/*     {% block content %}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-search__content') }}>*/
/*         {{ content }}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </div>*/
/* */
