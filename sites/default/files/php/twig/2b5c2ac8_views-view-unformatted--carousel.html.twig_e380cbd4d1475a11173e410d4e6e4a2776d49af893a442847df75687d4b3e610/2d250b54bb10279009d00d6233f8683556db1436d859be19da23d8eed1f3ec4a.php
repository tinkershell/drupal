<?php

/* themes/zircon/templates/views/views-view-unformatted--carousel.html.twig */
class __TwigTemplate_94b3db9d44754f2d92b5a49df6d7ecfb4ba39723dad81b16f2313fa04801e218 extends Twig_Template
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
        // line 1
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 2
            echo "  <h3>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
";
        }
        // line 4
        echo "  
<div class=\"slider responsive carousel-responsive\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 7
            echo "      <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true);
            echo ">
        ";
            // line 8
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    
</div>  
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view-unformatted--carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  40 => 8,  35 => 7,  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if title %}*/
/*   <h3>{{ title }}</h3>*/
/* {% endif %}*/
/*   */
/* <div class="slider responsive carousel-responsive">*/
/*     {% for row in rows %}*/
/*       <div{{ row.attributes }}>*/
/*         {{ row.content }}*/
/*       </div>*/
/*     {% endfor %}    */
/* </div>  */
/* */
