<?php

/* core/themes/classy/templates/user/user.html.twig */
class __TwigTemplate_e7a19929625e184e4fdf373abb3cd1b29ca217afa42fdefb0f3f8ab0235ea48f extends Twig_Template
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
        // line 19
        echo "<article";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">
  ";
        // line 20
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 23
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 23,  26 => 21,  24 => 20,  19 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to present all user data.*/
/*  **/
/*  * This template is used when viewing a registered user's page,*/
/*  * e.g., example.com/user/123. 123 being the user's ID.*/
/*  **/
/*  * Available variables:*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'. Fields attached to a user*/
/*  *   such as 'user_picture' are available as 'content.user_picture'.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  * - user: A Drupal User entity.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  *//* */
/* #}*/
/* <article{{ attributes.addClass('profile') }}>*/
/*   {% if content %}*/
/*     {{- content -}}*/
/*   {% endif %}*/
/* </article>*/
/* */
