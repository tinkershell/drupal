<?php

/* themes/adaptivetheme/at_core/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_4d178692fb85f96566710cd85ab860ff1c78aba0686c10932a40e9a318219340 extends Twig_Template
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
        // line 44
        $context["classes"] = array(0 => "block", 1 => "block-menu", 2 => ("block-menu--" . \Drupal\Component\Utility\Html::getClass(        // line 47
(isset($context["derivative_plugin_id"]) ? $context["derivative_plugin_id"] : null))), 3 => ((        // line 48
(isset($context["label"]) ? $context["label"] : null)) ? ("has-title") : ("")));
        // line 51
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 52
        echo "<nav";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo " role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\">
  <div class=\"block__inner block-menu__inner\">

    ";
        // line 56
        echo "    ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 57
            echo "      ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "visually-hidden"), "method");
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    <h2 id=\"";
        // line 61
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block__title", 1 => "block-menu__title"), "method"), "html", null, true);
        echo "><span>";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true);
        echo "</span></h2>
    ";
        // line 62
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 65
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "
  </div>
</nav>
";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "      <div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "block__content", 1 => "block-menu__content"), "method"), "html", null, true);
        echo ">
        ";
        // line 67
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 67,  77 => 66,  74 => 65,  67 => 70,  64 => 65,  59 => 62,  51 => 61,  47 => 60,  44 => 59,  41 => 58,  38 => 57,  35 => 56,  26 => 52,  24 => 51,  22 => 48,  21 => 47,  20 => 44,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for a menu block.*/
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
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'block',*/
/*     'block-menu',*/
/*     'block-menu--' ~ derivative_plugin_id|clean_class,*/
/*     label ? 'has-title'*/
/*   ]*/
/* %}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav{{ attributes.addClass(classes) }} role="navigation" aria-labelledby="{{ heading_id }}">*/
/*   <div class="block__inner block-menu__inner">*/
/* */
/*     {# Label. If not displayed, we still provide it for screen readers. #}*/
/*     {% if not configuration.label_display %}*/
/*       {% set title_attributes = title_attributes.addClass('visually-hidden') %}*/
/*     {% endif %}*/
/* */
/*     {{ title_prefix }}*/
/*     <h2 id="{{ heading_id }}"{{ title_attributes.addClass('block__title', 'block-menu__title') }}><span>{{ configuration.label }}</span></h2>*/
/*     {{ title_suffix }}*/
/* */
/*     {# Menu. #}*/
/*     {% block content %}*/
/*       <div{{ content_attributes.addClass('block__content', 'block-menu__content') }}>*/
/*         {{ content }}*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*   </div>*/
/* </nav>*/
/* */
