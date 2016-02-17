<?php

/* core/themes/classy/templates/dataset/forums.html.twig */
class __TwigTemplate_5328a1daa5ce2ce930bc3c52f11cbf36b0f34659eeaf8aafe69c6a71b8a0918d extends Twig_Template
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
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/forum"), "html", null, true);
        echo "
";
        // line 18
        if ((isset($context["forums_defined"]) ? $context["forums_defined"] : null)) {
            // line 19
            echo "  <div class=\"forum\">
    ";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["forums"]) ? $context["forums"] : null), "html", null, true);
            echo "
    ";
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topics"]) ? $context["topics"] : null), "html", null, true);
            echo "
    ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topics_pager"]) ? $context["topics_pager"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/dataset/forums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 22,  32 => 21,  28 => 20,  25 => 19,  23 => 18,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a forum.*/
/*  **/
/*  * May contain forum containers as well as forum topics.*/
/*  **/
/*  * Available variables:*/
/*  * - forums: The forums to display (as processed by forum-list.html.twig).*/
/*  * - topics: The topics to display.*/
/*  * - topics_pager: The topics pager.*/
/*  * - forums_defined: A flag to indicate that the forums are configured.*/
/*  **/
/*  * @see template_preprocess_forums()*/
/*  *//* */
/* #}*/
/* {{ attach_library('classy/forum') }}*/
/* {% if forums_defined %}*/
/*   <div class="forum">*/
/*     {{ forums }}*/
/*     {{ topics }}*/
/*     {{ topics_pager }}*/
/*   </div>*/
/* {% endif %}*/
/* */
