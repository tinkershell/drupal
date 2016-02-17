<?php

/* core/themes/classy/templates/user/forum-submitted.html.twig */
class __TwigTemplate_67d7ceeaf0e01d7bf5e94a3dc95872746a76cb76a071a9a3b553edf1c9a8d6c3 extends Twig_Template
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
        if ((isset($context["time"]) ? $context["time"] : null)) {
            // line 18
            echo "  <span class=\"submitted\">";
            echo t("By @author @time ago", array("@author" => (isset($context["author"]) ? $context["author"] : null), "@time" => (isset($context["time"]) ? $context["time"] : null), ));
            echo "</span>
";
        } else {
            // line 20
            echo "  ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("n/a"));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/forum-submitted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 20,  21 => 18,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a forum post submission string.*/
/*  **/
/*  * The submission string indicates when and by whom a topic was submitted.*/
/*  **/
/*  * Available variables:*/
/*  * - author: The author of the post.*/
/*  * - time: How long ago the post was created.*/
/*  * - topic: An object with the raw data of the post. Potentially unsafe. Be*/
/*  *   sure to clean this data before printing.*/
/*  **/
/*  * @see template_preprocess_forum_submitted()*/
/*  *//* */
/* #}*/
/* {% if time %}*/
/*   <span class="submitted">{% trans %}By {{ author }} {{ time }} ago{% endtrans %}</span>*/
/* {% else %}*/
/*   {{ 'n/a'|t }}*/
/* {% endif %}*/
/* */
