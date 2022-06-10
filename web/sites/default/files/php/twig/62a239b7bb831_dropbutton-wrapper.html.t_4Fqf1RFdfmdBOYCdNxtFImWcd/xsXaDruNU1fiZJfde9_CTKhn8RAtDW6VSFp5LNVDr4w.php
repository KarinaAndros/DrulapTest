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

/* core/themes/classy/templates/form/dropbutton-wrapper.html.twig */
class __TwigTemplate_6919d3fcfe09a1d1c18e08e15f9bce2be75b0a9095387a53a7f39b79c03f26ba extends \Twig\Template
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
        // line 12
        if (($context["children"] ?? null)) {
            // line 13
            echo "  ";
            ob_start(function () { return ''; });
            // line 14
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 16, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  48 => 16,  44 => 14,  41 => 13,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/form/dropbutton-wrapper.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\core\\themes\\classy\\templates\\form\\dropbutton-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12, "apply" => 13);
        static $filters = array("escape" => 16, "spaceless" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply'],
                ['escape', 'spaceless'],
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
