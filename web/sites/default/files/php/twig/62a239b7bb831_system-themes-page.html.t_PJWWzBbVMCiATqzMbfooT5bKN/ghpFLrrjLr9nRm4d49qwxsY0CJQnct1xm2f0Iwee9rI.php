<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/stable/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_4149366135f8c6ef2e81459b70476dc5465e556e8fc45a43c744183219294c80 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 32, $this->source), "html", null, true);
        echo ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 34
            echo "    ";
            // line 35
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 37
$context["theme_group"], "state", [], "any", false, false, true, 37), 37, $this->source)), 2 => "clearfix"];
            // line 41
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 41), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">
      <h2 class=\"system-themes-list__header\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</h2>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                echo "        ";
                // line 45
                $context["theme_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,                 // line 46
$context["theme"], "is_default", [], "any", false, false, true, 46)) ? ("theme-default") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["theme"], "is_admin", [], "any", false, false, true, 47)) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 52
                echo "        <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 52), "addClass", [0 => ($context["theme_classes"] ?? null)], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                echo ">
          ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 53)) {
                    // line 54
                    echo "            ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "
          ";
                }
                // line 56
                echo "          <div class=\"theme-info\">
            <h3 class=\"theme-info__header\">";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 59)) {
                    // line 60
                    echo "                (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 60), 60, $this->source), ", "));
                    echo ")";
                }
                // line 62
                echo "</h3>
            <div class=\"theme-info__description\">";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "</div>
            ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 64)) {
                    // line 65
                    echo "              <div class=\"theme-info__requires\">
                ";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 66), 66, $this->source))]));
                    echo "
              </div>
            ";
                }
                // line 69
                echo "            ";
                // line 70
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 70)) {
                    // line 71
                    echo "              <div class=\"incompatible\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 73
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 75
                echo "          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 80,  142 => 78,  134 => 75,  128 => 73,  122 => 71,  119 => 70,  117 => 69,  111 => 66,  108 => 65,  106 => 64,  102 => 63,  99 => 62,  94 => 60,  92 => 59,  88 => 58,  85 => 56,  79 => 54,  77 => 53,  72 => 52,  70 => 47,  69 => 46,  68 => 45,  66 => 44,  62 => 43,  58 => 42,  53 => 41,  51 => 37,  50 => 35,  48 => 34,  44 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable/templates/admin/system-themes-page.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\core\\themes\\stable\\templates\\admin\\system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 33, "set" => 35, "if" => 53);
        static $filters = array("escape" => 32, "safe_join" => 60, "t" => 66, "render" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
