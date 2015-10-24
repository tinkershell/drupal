<?php

/* core/modules/responsive_image/templates/responsive-image-formatter.html.twig */
class __TwigTemplate_8f0e96ac720cef8ce0779af522faba9075a5799827d021c7c4d116a892eb3f73 extends Twig_Template
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
        // line 15
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 16
            echo "  <a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["responsive_image"]) ? $context["responsive_image"] : null), "html", null, true);
            echo "</a>
";
        } else {
            // line 18
            echo "  ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["responsive_image"]) ? $context["responsive_image"] : null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/responsive_image/templates/responsive-image-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 18,  21 => 16,  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a formatted responsive image field.*/
/*  **/
/*  * Available variables:*/
/*  * - responsive_image: A collection of responsive image data.*/
/*  * - url: An optional URL the image can be linked to.*/
/*  **/
/*  * @see template_preprocess_responsive_image_formatter()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if url %}*/
/*   <a href="{{ url }}">{{ responsive_image }}</a>*/
/* {% else %}*/
/*   {{ responsive_image }}*/
/* {% endif %}*/
/* */
