<?php

/* modules/tb_megamenu/templates/tb-megamenu-nav.html.twig */
class __TwigTemplate_af5a448e01d9acf0206a803f77d720f294556df9c48f602e734eaced889f26a0 extends Twig_Template
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
        echo "<ul ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo " >
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lis"]) ? $context["lis"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["li"]) {
            // line 3
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["li"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['li'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/tb-megamenu-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <ul {{ attributes }} >*/
/*   {% for li in lis %}*/
/*     {{ li }}*/
/*   {% endfor %}*/
/* </ul>*/
/* */
