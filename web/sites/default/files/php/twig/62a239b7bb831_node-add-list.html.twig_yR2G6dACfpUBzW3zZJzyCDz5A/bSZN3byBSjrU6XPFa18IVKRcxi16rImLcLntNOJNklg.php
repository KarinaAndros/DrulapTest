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

/* core/themes/classy/templates/content-edit/node-add-list.html.twig */
class __TwigTemplate_6889fbeb01c19d8901249fa31b1ad67453c7f506a5ab119c9b09954045614713 extends \Twig\Template
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
        // line 16
        if ( !twig_test_empty(($context["types"] ?? null))) {
            // line 17
            echo "  <dl class=\"node-type-list\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 19
                echo "      <dt>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "add_link", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</dt>
      <dd>";
                // line 20
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</dd>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </dl>
";
        } else {
            // line 24
            echo "  <p>
    ";
            // line 25
            $context["create_content"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("node.type_add");
            // line 26
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 27
($context["create_content"] ?? null), ));
            // line 29
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  72 => 27,  70 => 26,  68 => 25,  65 => 24,  61 => 22,  53 => 20,  48 => 19,  44 => 18,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/content-edit/node-add-list.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\core\\themes\\classy\\templates\\content-edit\\node-add-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "for" => 18, "set" => 25, "trans" => 26);
        static $filters = array("escape" => 19);
        static $functions = array("path" => 25);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'trans'],
                ['escape'],
                ['path']
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
