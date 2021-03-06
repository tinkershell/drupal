<?php

/* core/themes/classy/templates/form/details.html.twig */
class __TwigTemplate_700ca5e697b81b41c954b9f566b57591f2a2396043d0366dce54e5c9e82aee03 extends Twig_Template
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
        // line 17
        echo "<details";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        // line 18
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 19
            echo "<summary";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</summary>";
        }
        // line 21
        echo "<div class=\"details-wrapper\">
    ";
        // line 22
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 23
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 24
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 27
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 28
            echo "<div class=\"details-description\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>";
        }
        // line 30
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 31
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        }
        // line 33
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 34
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        }
        // line 36
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 36,  60 => 34,  58 => 33,  55 => 31,  53 => 30,  48 => 28,  46 => 27,  40 => 24,  37 => 23,  35 => 22,  32 => 21,  25 => 19,  23 => 18,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a details element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: A list of HTML attributes for the details element.*/
/*  * - errors: (optional) Any errors for this details element, may not be set.*/
/*  * - title: (optional) The title of the element, may not be set.*/
/*  * - description: (optional) The description of the element, may not be set.*/
/*  * - children: (optional) The children of the element, may not be set.*/
/*  * - value: (optional) The value of the element, may not be set.*/
/*  **/
/*  * @see template_preprocess_details()*/
/*  *//* */
/* #}*/
/* <details{{ attributes }}>*/
/*   {%- if title -%}*/
/*     <summary{{ summary_attributes }}>{{ title }}</summary>*/
/*   {%- endif -%}*/
/*   <div class="details-wrapper">*/
/*     {% if errors %}*/
/*       <div class="form-item--error-message">*/
/*         <strong>{{ errors }}</strong>*/
/*       </div>*/
/*     {% endif %}*/
/*     {%- if description -%}*/
/*       <div class="details-description">{{ description }}</div>*/
/*     {%- endif -%}*/
/*     {%- if children -%}*/
/*       {{ children }}*/
/*     {%- endif -%}*/
/*     {%- if value -%}*/
/*       {{ value }}*/
/*     {%- endif -%}*/
/*   </div>*/
/* </details>*/
/* */
