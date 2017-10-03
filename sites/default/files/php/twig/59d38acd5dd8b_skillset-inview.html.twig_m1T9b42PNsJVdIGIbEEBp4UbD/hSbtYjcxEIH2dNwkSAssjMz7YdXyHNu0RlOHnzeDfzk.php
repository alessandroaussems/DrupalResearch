<?php

/* modules/skillset_inview/templates/skillset-inview.html.twig */
class __TwigTemplate_200253e1d901f39c5ecd64dba2a6bdc40a27b9458919b498b2775c1c4f3288a6 extends Twig_Template
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
        $tags = array("if" => 44, "set" => 45, "for" => 65);
        $filters = array("hexToRGB" => 45, "rangeToPercent" => 45, "raw" => 60, "unescape" => 62, "t" => 62);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('hexToRGB', 'rangeToPercent', 'raw', 'unescape', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 40
        echo "<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"column col-xs-9 col-xs-push-1 col-sm-10 col-sm-push-1 skillset-inview-wrapper\">
";
        // line 44
        if (((isset($context["color_active"]) ? $context["color_active"] : null) == 1)) {
            // line 45
            $context["bar"] = (($this->env->getExtension('skillset_inview.twig.color_convert')->hexToRGB($this->getAttribute((isset($context["color"]) ? $context["color"] : null), "bar", array())) . ",") . $this->env->getExtension('skillset_inview.twig.color_convert')->rangeToPercent($this->getAttribute((isset($context["color"]) ? $context["color"] : null), "bar_opacity", array())));
            // line 46
            $context["skillbar"] = ((".skill-bar {background: rgba(" . (isset($context["bar"]) ? $context["bar"] : null)) . ") !important;} ");
            // line 47
            $context["back"] = (($this->env->getExtension('skillset_inview.twig.color_convert')->hexToRGB($this->getAttribute((isset($context["color"]) ? $context["color"] : null), "back", array())) . ",") . $this->env->getExtension('skillset_inview.twig.color_convert')->rangeToPercent($this->getAttribute((isset($context["color"]) ? $context["color"] : null), "back_opacity", array())));
            // line 48
            $context["skillline"] = ((((".skill-line {background: rgba(" . (isset($context["back"]) ? $context["back"] : null)) . ") !important; border: 1px solid ") . $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "border", array())) . " !important;} ");
            // line 49
            $context["labels"] = ((".skill-label {color: " . $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "labels", array())) . " !important;} ");
            // line 50
            $context["percent_inside"] = ((".skill-line .percent.inside {color: " . $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "percent_inside", array())) . " !important;} ");
            // line 51
            $context["percent_outside"] = ((".skill-line .percent.outside {color: " . $this->getAttribute((isset($context["color"]) ? $context["color"] : null), "percent_outside", array())) . " !important;} ");
            // line 52
            $context["style"] = ((((((((((("
        <style type=\"text/css\" scoped>
        " .             // line 54
(isset($context["skillbar"]) ? $context["skillbar"] : null)) . "
        ") .             // line 55
(isset($context["skillline"]) ? $context["skillline"] : null)) . "
        ") .             // line 56
(isset($context["labels"]) ? $context["labels"] : null)) . "
        ") .             // line 57
(isset($context["percent_inside"]) ? $context["percent_inside"] : null)) . "
        ") .             // line 58
(isset($context["percent_outside"]) ? $context["percent_outside"] : null)) . "
        ") . "</style>");
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["style"]) ? $context["style"] : null)));
            echo "
";
        }
        // line 62
        if ( !twig_test_empty((isset($context["header"]) ? $context["header"] : null))) {
            echo "        <h3 class=\"skill-label\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('skillset_inview.twig.unescape')->unescape(t("@header", array("@header" => (isset($context["header"]) ? $context["header"] : null))))));
            echo "</h3>";
        }
        // line 63
        echo "        <dl>
";
        // line 64
        if ( !twig_test_empty((isset($context["items"]) ? $context["items"] : null))) {
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["skill"]) {
                // line 66
                echo "            <div class=\"skill-row row\" data-item=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["skill"], "id", array()), "html", null, true));
                echo "\">
              <dt class=\"column col-xs-12 col-sm-12 col-md-3 skill-label\">";
                // line 67
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('skillset_inview.twig.unescape')->unescape(t("@skill", array("@skill" => $this->getAttribute($context["skill"], "name", array()))))));
                echo "</dt>
";
                // line 68
                $context["skill_position"] = ((($this->getAttribute($context["skill"], "percent", array()) >= 25)) ? ("inside") : ("outside"));
                // line 69
                $context["percent"] = (((("<span class=\"percent " . (isset($context["skill_position"]) ? $context["skill_position"] : null)) . "\">") . $this->getAttribute($context["skill"], "percent", array())) . "%</span>");
                // line 70
                echo "              <dd class=\"column col-xs-12 col-sm-12 col-md-8 item-";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["skill"], "id", array()), "html", null, true));
                echo " skill-line\"><span data-percent=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["skill"], "percent", array()), "html", null, true));
                echo "\" style=\"width:";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["skill"], "percent", array()), "html", null, true));
                echo "%;\" class=\"skill-bar\">";
                if (($this->getAttribute($context["skill"], "percent", array()) >= 25)) {
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["percent"]) ? $context["percent"] : null)));
                }
                echo "</span>";
                if (($this->getAttribute($context["skill"], "percent", array()) < 25)) {
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["percent"]) ? $context["percent"] : null)));
                }
                echo "</dd>
            </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 74
        echo "        </dl>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/skillset_inview/templates/skillset-inview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 74,  112 => 70,  110 => 69,  108 => 68,  104 => 67,  99 => 66,  95 => 65,  93 => 64,  90 => 63,  84 => 62,  79 => 60,  76 => 58,  74 => 57,  72 => 56,  70 => 55,  68 => 54,  65 => 52,  63 => 51,  61 => 50,  59 => 49,  57 => 48,  55 => 47,  53 => 46,  51 => 45,  49 => 44,  43 => 40,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Javascript & CSS behaviour expects the following classes and relative nesting.
 *
 * CLASS LIST:
 *   skillset-inview-wrapper
 *   percent
 *   inside
 *   outside
 *   skill-line
 *   skill-bar
 *   skill-row
 * END OF LIST.
 *
 *
 * Otherwise, Bootstrap Grids based classes and html should be
 * able to bechanged per your need.
 *
 * 'data-percent' and 'data-item' attributes are required
 * for javascript as well as the class 'item-[count]' from
 * the skill.id variable.
 *
 * Twig Translation refer to:
 *   https://www.drupal.org/node/1927584
 *     Add support for the Twig {% trans %} tag extension
 *   https://www.drupal.org/node/2357633
 *     Filters-Modifying Variables In Twig Templates
 *
 * Available variables in this template:
 * - header:  (string) Section Header.
 * - items:  (group)  Containing skills for each skillset row.
 *            Is pre-sorted by weight.
 *              (int) skill.id -- used as item-count in behaviour
 *              (int) skill.weight  -- natural sort weight
 *              (string) skill.name
 *              (int) skill.percent
 */
#}
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"column col-xs-9 col-xs-push-1 col-sm-10 col-sm-push-1 skillset-inview-wrapper\">
{% if color_active==1 %}
{% set bar = color.bar|hexToRGB ~ ',' ~ color.bar_opacity|rangeToPercent %}
{% set skillbar = '.skill-bar {background: rgba(' ~ bar ~') !important;} ' %}
{% set back = color.back|hexToRGB ~ ',' ~ color.back_opacity|rangeToPercent %}
{% set skillline = '.skill-line {background: rgba(' ~ back ~') !important; border: 1px solid ' ~ color.border ~ ' !important;} ' %}
{% set labels = '.skill-label {color: ' ~ color.labels ~ ' !important;} ' %}
{% set percent_inside = '.skill-line .percent.inside {color: ' ~ color.percent_inside ~ ' !important;} ' %}
{% set percent_outside = '.skill-line .percent.outside {color: ' ~ color.percent_outside ~ ' !important;} ' %}
{% set style = '
        <style type=\"text/css\" scoped>
        ' ~ skillbar ~ '
        ' ~ skillline ~ '
        ' ~ labels ~ '
        ' ~ percent_inside ~ '
        ' ~ percent_outside ~ '
        ' ~ '</style>' %}
{{ style|raw }}
{% endif %}
{% if header is not empty %}        <h3 class=\"skill-label\">{{ '@header'|t({ '@header': header })|unescape }}</h3>{% endif %}
        <dl>
{% if items is not empty %}
{% for key,skill in items %}
            <div class=\"skill-row row\" data-item=\"{{ skill.id }}\">
              <dt class=\"column col-xs-12 col-sm-12 col-md-3 skill-label\">{{ '@skill'|t({ '@skill': skill.name })|unescape }}</dt>
{% set skill_position = ((skill.percent >= 25) ? 'inside' : 'outside')  %}
{% set percent = '<span class=\"percent ' ~ skill_position ~ '\">' ~ skill.percent ~ '%</span>' %}
              <dd class=\"column col-xs-12 col-sm-12 col-md-8 item-{{ skill.id }} skill-line\"><span data-percent=\"{{ skill.percent }}\" style=\"width:{{ skill.percent }}%;\" class=\"skill-bar\">{% if skill.percent >= 25 %}{{ percent|raw }}{% endif %}</span>{% if skill.percent < 25 %}{{ percent|raw }}{% endif %}</dd>
            </div>
{% endfor %}
{% endif %}
        </dl>
      </div>
    </div>
  </div>
</section>
";
    }
}
