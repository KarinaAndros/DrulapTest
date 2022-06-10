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

/* themes/yg_iconic/templates/page.html.twig */
class __TwigTemplate_613afa6abed4ef4e3bec38af763f67732d13f767e1e4cb25aacb8cadb142c9c1 extends \Twig\Template
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
        // line 89
        echo "  <!-- Banner section -->
";
        // line 90
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 91
        echo "  ";
        if ((twig_in_filter("comment", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null)))) || twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null)))))) {
            // line 92
            echo "<div class=\"bg-grediunt\">
   <div class=\"bg-banner-img clip-ellipse\" style=\"background-image: url(/yg_iconic/themes/yg_iconic/assets/images/banner-img.jpg);\">
      <div class=\"ovrllay\">
         <section id=\"banner\" class=\" mb-90\">
            <div class=\"container \">
               <div class=\"row\">
                  <!-- #banner-text start -->            
                  <div id=\"banner-text\" class=\"col-md-12 text-c text-center \">
                     <h5 class=\"wow fadeInUp main-h\" data-wow-delay=\"0.2s\" style=\"visibility: visible; animation-delay: 0.2s;\">";
            // line 100
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "</h5>
                  </div>
                  <!-- /#banner-text End -->
               </div>
            </div>
         </section>
      </div>
   </div>
</div> 
";
        }
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 164
        echo "<!--Call to Action Section -->
<div class=\"our_partners_area bg-gray\">
         <div class=\"book_now_aera \">
            <div class=\"container\">
               <div class=\"row book_now\">
                  <div class=\"col-md-5 booking_text\">
                     <h4>";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 170, $this->source), "html", null, true);
        echo "</h4>
                     <p>";
        // line 171
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_us_description"] ?? null), 171, $this->source), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-md-7 p0 book_bottun\">
                     <div class=\"col-md-7\">
                       
                     </div>
                     <div class=\"col-md-5\">
                        <div class=\"top-banner wow fadeInRight text-left\" style=\"visibility: visible; animation-name: fadeInRight;\">
                           <a id=\"#services\" href=\"";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null), 179, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary  wow fadeInUp  js-scroll-trigger\" data-wow-delay=\"1s\" style=\"visibility: visible; animation-delay: 1s; animation-name: fadeInUp;\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null), 179, $this->source), "html", null, true);
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
        // line 195
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_about", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
        echo "
               </div>   
               <div class=\"bigpixi-footer-social\">
                  <a href=\"";
        // line 198
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 198, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-fb\" class=\"fa fa-facebook-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 199
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 199, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-tw\" class=\"fa fa-twitter-square fa-3x social\"></i></a>
                  <a href=\"";
        // line 200
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 200, $this->source), "html", null, true);
        echo "\" target=\"_blank\"><i id=\"social-em\" class=\"fa fa-instagram fa-3x social\"></i></a>
               </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-md-3\">
               ";
        // line 206
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-md-4\">
               <ul class=\"location\">
                  <li class=\"footer-left-h\"><i class=\"fa fa-map-marker\"></i>";
        // line 210
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 210, $this->source), "html", null, true);
        echo "</li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-phone\"></i>Call Us <br>";
        // line 211
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_number"] ?? null), 211, $this->source), "html", null, true);
        echo "
                  </li>
                  <li class=\"footer-left-h\"><i class=\"fa fa-envelope-o\"></i>Email<br>
                     <a href=\"mailto:";
        // line 214
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 214, $this->source), "html", null, true);
        echo "\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 214, $this->source), "html", null, true);
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

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 116
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 116)) {
            // line 117
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "    ";
        }
        // line 121
        echo "    ";
        // line 122
        echo "    ";
        // line 123
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 124
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 124))) ? ("") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 125
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125)))) ? ("") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 126
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126)))) ? ("") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 127
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 127)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127)))) ? ("") : (""))];
        // line 130
        echo "    <section ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 130), 130, $this->source), "html", null, true);
        echo ">   
      ";
        // line 132
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 136
            echo "      ";
        }
        // line 137
        echo "      ";
        // line 138
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 139
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 142
            echo "        ";
        }
        // line 143
        echo "      ";
        // line 144
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 145
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "      ";
        // line 150
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 150)) {
            // line 151
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "      ";
        // line 156
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "      </section>
   </div>
   </div>
";
    }

    // line 117
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 133
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "          <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "</div>
        ";
    }

    // line 139
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 140, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 145
    public function block_action_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        echo "            <ul class=\"action-links\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 146, $this->source), "html", null, true);
        echo "</ul>
          ";
    }

    // line 151
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "          <a id=\"main-content\"></a>
          ";
        // line 158
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_iconic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 158,  374 => 157,  370 => 156,  363 => 152,  359 => 151,  352 => 146,  348 => 145,  341 => 140,  337 => 139,  330 => 134,  326 => 133,  321 => 118,  317 => 117,  310 => 160,  307 => 156,  305 => 155,  302 => 154,  299 => 151,  296 => 150,  294 => 149,  291 => 148,  288 => 145,  285 => 144,  283 => 143,  280 => 142,  277 => 139,  274 => 138,  272 => 137,  269 => 136,  266 => 133,  263 => 132,  258 => 130,  256 => 127,  255 => 126,  254 => 125,  253 => 124,  252 => 123,  250 => 122,  248 => 121,  245 => 120,  242 => 117,  239 => 116,  234 => 112,  230 => 111,  211 => 214,  205 => 211,  201 => 210,  194 => 206,  185 => 200,  181 => 199,  177 => 198,  171 => 195,  150 => 179,  139 => 171,  135 => 170,  127 => 164,  125 => 111,  112 => 100,  102 => 92,  99 => 91,  97 => 90,  94 => 89,  90 => 87,  79 => 80,  70 => 74,  57 => 63,  54 => 62,  51 => 61,  49 => 60,  46 => 59,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_iconic/templates/page.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\themes\\yg_iconic\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 60, "if" => 61, "block" => 111);
        static $filters = array("escape" => 74, "render" => 91);
        static $functions = array("url" => 90);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'render'],
                ['url']
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
