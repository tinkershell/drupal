<?php

/* themes/adaptivetheme/at_core/templates/system/status-messages.html.twig */
class __TwigTemplate_9ccefb29f05f3d1b336a3d9a307f69d1d6d8bdc2621300c088e4809b0bc7ceb8 extends Twig_Template
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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  ";
            // line 30
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 32
$context["type"]));
            // line 35
            echo "  <div class=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
            echo "\">

    <div class=\"messages__container\"";
            // line 37
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">

      ";
            // line 39
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 40
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 42
            echo "
      <span class=\"icon icon-";
            // line 43
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["type"], "html", null, true);
            echo "\" aria-hidden=\"true\"></span>

      ";
            // line 45
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 46
                echo "        <ul class=\"messages__list\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "        </ul>
      ";
            } else {
                // line 52
                echo "        <div class=\"messages__list\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true);
                echo "</div>
      ";
            }
            // line 54
            echo "
    </div>

  </div>
  ";
            // line 59
            echo "  ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 59,  87 => 54,  81 => 52,  77 => 50,  68 => 48,  64 => 47,  61 => 46,  59 => 45,  54 => 43,  51 => 42,  45 => 40,  43 => 39,  36 => 37,  28 => 35,  26 => 32,  25 => 30,  23 => 29,  19 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% for type, messages in message_list %}*/
/*   {%*/
/*     set classes = [*/
/*       'messages',*/
/*       'messages--' ~ type,*/
/*     ]*/
/*   %}*/
/*   <div class="{{ attributes.addClass(classes).class }}" role="contentinfo" aria-label="{{ status_headings[type] }}">*/
/* */
/*     <div class="messages__container"{% if type == 'error' %} role="alert"{% endif %}>*/
/* */
/*       {% if status_headings[type] %}*/
/*         <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*       {% endif %}*/
/* */
/*       <span class="icon icon-{{ type }}" aria-hidden="true"></span>*/
/* */
/*       {% if messages|length > 1 %}*/
/*         <ul class="messages__list">*/
/*           {% for message in messages %}*/
/*             <li class="messages__item">{{ message }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         <div class="messages__list">{{ messages|first }}</div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/*   {# Remove type specific classes. #}*/
/*   {{ attributes.removeClass(classes) }}*/
/* {% endfor %}*/
/* */
