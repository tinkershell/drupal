<?php

/* core/modules/system/templates/authorize-report.html.twig */
class __TwigTemplate_8770ad7bc2b0dff276c77a7694a411e80295c2fcb525129692f4a9cf045ece5f extends Twig_Template
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
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 18
            echo "  <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "authorize-results"), "method"), "html", null, true);
            echo ">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message_group"]) {
                // line 20
                echo "      ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message_group"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/authorize-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 22,  30 => 20,  26 => 19,  21 => 18,  19 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for authorize.php operation report templates.*/
/*  **/
/*  * This report displays the results of an operation run via authorize.php.*/
/*  **/
/*  * Available variables:*/
/*  * - messages: A list of result messages.*/
/*  * - attributes: HTML attributes for the element.*/
/*  **/
/*  * @see template_preprocess_authorize_report()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if messages %}*/
/*   <div{{ attributes.addClass('authorize-results') }}>*/
/*     {% for message_group in messages %}*/
/*       {{ message_group }}*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
