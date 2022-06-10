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

/* themes/yg_iconic/templates/page--front.html.twig */
class __TwigTemplate_13bcdca6f07753e7a999833dba07e5ff2d25e62e9739930d0b2f7af14896cd25 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 60), "fluid_container", [], "any", false, false, true, 60)) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 61))) {
            // line 62
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 62)) {
                // line 63
                echo "     <nav class=\"navbar navbar-default header_aera affix-top\">
         <div class=\"container m-s\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"col-md-4 p0\">
               <div class=\"navbar-header\">
                  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                     <span class=\"sr-only\">Toggle navigation</span>
                     <span class=\"icon-bar\"></span>
                     <span class=\"icon-bar\"></span>
                     <span class=\"icon-bar\"></span>
                  </button>
                  ";
                // line 74
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-8 p0\">
               <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                  ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
               </div>
               <!-- /.navbar-collapse -->
            </div>
         </div>
         <!-- /.container -->
      </nav>
    ";
            }
            // line 87
            echo "  
  ";
        }
        // line 90
        $this->displayBlock('main', $context, $blocks);
        // line 143
        echo "<!--Call to Action Section -->
<div class=\"our_partners_area bg-gray\">
         <div class=\"book_now_aera \">
            <div class=\"container\">
               <div class=\"row book_now\">
                  <div class=\"col-md-5 booking_text\">
                     <h4>";
        // line 149
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 149, $this->source), "html", null, true);
        echo "</h4>
                     <p>";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_us_description"] ?? null), 150, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-md-7 p0 book_bottun\">
                     <div class=\"col-md-7\">
                       
                     </div>
                     <div class=\"col-md-5\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null), 158, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null), 158, $this->source), "html", null, true);
        echo "</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

<!-- Footer Section -->
<div class=\"our_footer_area\">
   <div class=\"book_now_aera \">
      <div class=\"container wow fadeInUp\">
         <div class=\"row book_now\">
            <div class=\"col-md-4\">
               <div class=\"\">
               ";
        // line 174
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
        echo "
               </div>   
               <div class=\"bigpixi-footer-social\">
                  <a href=\"";
        // line 177
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 177, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 178
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 178, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 179, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-3x social\"></i></a>
               </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-3\">
               ";
        // line 185
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-4\">
               <ul class=\"location\">
                  <li class=\"footer-left-h\"><i class=\"fa fa-map-marker\"></i>";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 189, $this->source), "html", null, true);
        echo "</li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-phone\"></i>Call Us <br>";
        // line 190
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 190, $this->source), "html", null, true);
        echo "
                  </li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-envelope-o\"></i>Email<br>
                     <a href=\"mailto:";
        // line 193
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 193, $this->source), "html", null, true);
        echo "\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 193, $this->source), "html", null, true);
        echo " </a>
                  </li>
               </ul>
            </div>
             <div class=\"col-md-12\">
                <p class=\"color-gray\">@2018. <a href=\"#\">YG Iconic</a> All Rights Reserved. Design by <a href=\"https://www.navthemes.com\" target=\"_blank\">NavThemes</a></p>
                <p class=\"color-gray\"> Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\"> Young Globes</a></p>
            </div>
         </div>
      </div>
   </div>
</div>
";
    }

    // line 90
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 95
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95)) {
            // line 96
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 99
            echo "    ";
        }
        // line 100
        echo "    ";
        // line 101
        echo "    ";
        // line 102
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 103
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 103))) ? ("") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 104
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104)))) ? ("") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 105
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 105) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 105)))) ? ("") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 106
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 106)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 106)))) ? ("") : (""))];
        // line 109
        echo "    <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 109), 109, $this->source), "html", null, true);
        echo ">   
      ";
        // line 111
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 111)) {
            // line 112
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "      ";
        // line 117
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 118
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 121
            echo "        ";
        }
        // line 122
        echo "      ";
        // line 123
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 124
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 127
            echo "        ";
        }
        // line 128
        echo "      ";
        // line 129
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 129)) {
            // line 130
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "      ";
        // line 135
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "      </section>
   </div>
   </div>
";
    }

    // line 96
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 112
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
        echo "</div>
        ";
    }

    // line 118
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 119, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 124
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 125, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 130
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 135
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "          <a id=\"main-content\"></a>
          ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 137,  343 => 136,  339 => 135,  332 => 131,  328 => 130,  321 => 125,  317 => 124,  310 => 119,  306 => 118,  299 => 113,  295 => 112,  290 => 97,  286 => 96,  279 => 139,  276 => 135,  274 => 134,  271 => 133,  268 => 130,  265 => 129,  263 => 128,  260 => 127,  257 => 124,  254 => 123,  252 => 122,  249 => 121,  246 => 118,  243 => 117,  241 => 116,  238 => 115,  235 => 112,  232 => 111,  227 => 109,  225 => 106,  224 => 105,  223 => 104,  222 => 103,  221 => 102,  219 => 101,  217 => 100,  214 => 99,  211 => 96,  208 => 95,  203 => 91,  199 => 90,  180 => 193,  174 => 190,  170 => 189,  163 => 185,  154 => 179,  150 => 178,  146 => 177,  140 => 174,  119 => 158,  108 => 150,  104 => 149,  96 => 143,  94 => 90,  90 => 87,  79 => 80,  70 => 74,  57 => 63,  54 => 62,  51 => 61,  49 => 60,  46 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_iconic/templates/page--front.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\themes\\yg_iconic\\templates\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 60, "if" => 61, "block" => 90);
        static $filters = array("escape" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
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
