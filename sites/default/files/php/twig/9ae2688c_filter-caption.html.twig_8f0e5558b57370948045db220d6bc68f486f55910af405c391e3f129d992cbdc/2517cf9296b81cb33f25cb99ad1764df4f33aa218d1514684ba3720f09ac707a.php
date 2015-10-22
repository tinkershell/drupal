<?php

/* core/themes/classy/templates/content-edit/filter-caption.html.twig */
class __TwigTemplate_4334d91e2f6ac26ae3e4b6fc1558dcd204189a57bd8765145e92082648215c03 extends Twig_Template
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
        echo "<figure role=\"group\" class=\"caption caption-";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
        if ((isset($context["classes"]) ? $context["classes"] : null)) {
            echo " ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
        }
        echo "\">
";
        // line 16
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["node"]) ? $context["node"] : null), "html", null, true);
        echo "
<figcaption>";
        // line 17
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
        echo "</figcaption>
</figure>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-caption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 17,  28 => 16,  19 => 15,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a filter caption.*/
/*  **/
/*  * Returns HTML for a captioned image, audio, video or other tag.*/
/*  **/
/*  * Available variables*/
/*  * - string node: The complete HTML tag whose contents are being captioned.*/
/*  * - string tag: The name of the HTML tag whose contents are being captioned.*/
/*  * - string caption: The caption text.*/
/*  * - string classes: The classes of the captioned HTML tag.*/
/*  *//* */
/* #}*/
/* <figure role="group" class="caption caption-{{ tag }}{%- if classes %} {{ classes }}{%- endif %}">*/
/* {{ node }}*/
/* <figcaption>{{ caption }}</figcaption>*/
/* </figure>*/
/* */
