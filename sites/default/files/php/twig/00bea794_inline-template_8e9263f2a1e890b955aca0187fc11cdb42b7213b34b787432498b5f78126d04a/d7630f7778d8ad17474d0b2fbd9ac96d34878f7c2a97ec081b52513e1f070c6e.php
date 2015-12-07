<?php

/* {# inline_template_start #}<div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div> */
class __TwigTemplate_f821c77039c217f90bf7a8f976486c27a1fbd3d077f048bd0be538f78a56fbe7 extends Twig_Template
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
        echo "<div class=\"field-plugin-summary\">";
        echo $this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["summary"]) ? $context["summary"] : null), "<br />"));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {# inline_template_start #}<div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div>*/
