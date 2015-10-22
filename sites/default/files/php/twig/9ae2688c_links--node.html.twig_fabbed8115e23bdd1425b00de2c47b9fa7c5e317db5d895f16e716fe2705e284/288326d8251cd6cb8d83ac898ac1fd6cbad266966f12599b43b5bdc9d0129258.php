<?php

/* core/themes/classy/templates/content/links--node.html.twig */
class __TwigTemplate_587ac973c7acb4c886a40f53ec066b4f5ba6068541ec9e6fdda2a42002b9e000 extends Twig_Template
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
        // line 37
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 38
            echo "  <div class=\"node__links\">
    ";
            // line 39
            $this->loadTemplate("links.html.twig", "core/themes/classy/templates/content/links--node.html.twig", 39)->display($context);
            // line 40
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/links--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 40,  24 => 39,  21 => 38,  19 => 37,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display node links.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Attributes for the UL containing the list of links.*/
/*  * - links: Links to be output.*/
/*  *   Each link will have the following elements:*/
/*  *   - title: The link text.*/
/*  *   - href: The link URL. If omitted, the 'title' is shown as a plain text*/
/*  *     item in the links list. If 'href' is supplied, the entire link is passed*/
/*  *     to l() as its $options parameter.*/
/*  *   - attributes: (optional) HTML attributes for the anchor, or for the <span>*/
/*  *     tag if no 'href' is supplied.*/
/*  *   - link_key: The link CSS class.*/
/*  * - heading: (optional) A heading to precede the links.*/
/*  *   - text: The heading text.*/
/*  *   - level: The heading level (e.g. 'h2', 'h3').*/
/*  *   - attributes: (optional) A keyed list of attributes for the heading.*/
/*  *   If the heading is a string, it will be used as the text of the heading and*/
/*  *   the level will default to 'h2'.*/
/*  **/
/*  *   Headings should be used on navigation menus and any list of links that*/
/*  *   consistently appears on multiple pages. To make the heading invisible use*/
/*  *   the 'visually-hidden' CSS class. Do not use 'display:none', which*/
/*  *   removes it from screen readers and assistive technology. Headings allow*/
/*  *   screen reader and keyboard only users to navigate to or skip the links.*/
/*  *   See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  *   http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @see template_preprocess_links()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if links %}*/
/*   <div class="node__links">*/
/*     {% include "links.html.twig" %}*/
/*   </div>*/
/* {% endif %}*/
/* */
