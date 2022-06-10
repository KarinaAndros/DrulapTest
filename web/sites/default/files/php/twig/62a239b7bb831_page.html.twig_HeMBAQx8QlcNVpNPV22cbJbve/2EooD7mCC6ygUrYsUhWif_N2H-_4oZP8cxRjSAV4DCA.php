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

/* themes/business_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_07d99c558b458c049538dfe259578e4ddaa2b0956d71285e35a0b4ec45ddb024 extends \Twig\Template
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 67)) {
            // line 68
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        
        ";
        }
        // line 78
        echo "      </div>

      ";
        // line 80
        if ((($context["show_social_icon"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 80))) {
            // line 81
            echo "        <div class=\"col-sm-8 col-md-9\">

          ";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 83)) {
                // line 84
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 86
            echo "          
          ";
            // line 87
            if (($context["show_social_icon"] ?? null)) {
                // line 88
                echo "            <div class=\"social-media\">
              ";
                // line 89
                if (($context["facebook_url"] ?? null)) {
                    // line 90
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 90, $this->source), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
                }
                // line 92
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 93
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 93, $this->source), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
                }
                // line 95
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 96
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 96, $this->source), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
                }
                // line 98
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 99
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 99, $this->source), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
                }
                // line 101
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 102
                    echo "                <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 102, $this->source), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fas fa-rss\"></i></a>
              ";
                }
                // line 104
                echo "            </div>
          ";
            }
            // line 106
            echo "
        </div>
      ";
        }
        // line 109
        echo "
    </div>
  </div>
</header>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  <div class=\"row\">
    <div class=\"navbar-header col-md-12\">
      <nav class=\"navbar navbar-default\" role=\"navigation\">
        

        ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 122)) {
            // line 123
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 125
        echo "      </nav>
    </div>
  </div>
</div>


";
        // line 131
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 132
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 136
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 136, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 142
        echo "

<!--Highlighted-->
  ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 145)) {
            // line 146
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 158
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 159
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 159) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 159)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 159))) {
                // line 160
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 166
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 166, $this->source), "html", null, true);
                echo ">
            ";
                // line 167
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 167)) {
                    // line 168
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 170
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 173
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 173, $this->source), "html", null, true);
                echo ">
            ";
                // line 174
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 174)) {
                    // line 175
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 177
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 180
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null), 180, $this->source), "html", null, true);
                echo ">
            ";
                // line 181
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 181)) {
                    // line 182
                    echo "              ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                    echo "
            ";
                }
                // line 184
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 191
        echo "<!--End Top Widget -->


<!-- Start Middle Widget -->
";
        // line 195
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 195) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 195)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 195))) {
            // line 196
            echo "  <div class=\"middlewidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 202
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 202, $this->source), "html", null, true);
            echo ">
          ";
            // line 203
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 203)) {
                // line 204
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_first", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 206
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 209
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_class"] ?? null), 209, $this->source), "html", null, true);
            echo ">
          ";
            // line 210
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 210)) {
                // line 211
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_second", [], "any", false, false, true, 211), 211, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 213
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 216
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["middle_third_class"] ?? null), 216, $this->source), "html", null, true);
            echo ">
          ";
            // line 217
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 217)) {
                // line 218
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_third", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 220
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 226
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 230
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 230) &&  !($context["is_front"] ?? null))) {
            // line 231
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 235
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 240
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 249)) {
            // line 250
            echo "        <div class=\"row\">
          ";
            // line 251
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 254
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 258
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 263
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 263)) {
            // line 264
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 265
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 265, $this->source), "html", null, true);
            echo " >
            ";
            // line 266
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 270
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 273)) {
            // line 274
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 275
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 275, $this->source), "html", null, true);
            echo ">
            ";
            // line 276
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 276), 276, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 280
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 283
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 283)) {
            // line 284
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 285
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 285, $this->source), "html", null, true);
            echo ">
            ";
            // line 286
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 290
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 296)) {
            // line 297
            echo "      <div class=\"row\">
        ";
            // line 298
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 298), 298, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 301
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->


<!-- Start: Price table widgets -->

";
        // line 309
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 309) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 309)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 309))) {
            // line 310
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 316
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 316)) {
                // line 317
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 317, $this->source), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 318), 318, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 320
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 324
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 324)) {
                // line 325
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 325, $this->source), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 326), 326, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 328
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 332
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 332)) {
                // line 333
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 333, $this->source), "html", null, true);
                echo ">
            ";
                // line 334
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 334), 334, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 336
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 340
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 340)) {
                // line 341
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 341, $this->source), "html", null, true);
                echo ">
            ";
                // line 342
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 342), 342, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 344
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 352
        echo "
<!--End: Price table widgets -->


<!-- start: bottom -->
";
        // line 357
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 357) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 357)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 357))) {
            // line 358
            echo "  <div class=\"bottomwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start bottom First Region -->
        <div class = ";
            // line 364
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 364, $this->source), "html", null, true);
            echo ">
          ";
            // line 365
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 365)) {
                // line 366
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 366), 366, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 368
            echo "        </div>
        <!-- End bottom First Region -->

        <!-- Start bottom Second Region -->
        <div class = ";
            // line 372
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 372, $this->source), "html", null, true);
            echo ">
          ";
            // line 373
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 373)) {
                // line 374
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 374), 374, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 376
            echo "        </div>
        <!-- End bottom Second Region -->

        <!-- Start bottom third Region -->
        <div class = ";
            // line 380
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 380, $this->source), "html", null, true);
            echo ">
          ";
            // line 381
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 381)) {
                // line 382
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 382), 382, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 384
            echo "        </div>
        <!-- End bottom Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 390
        echo "<!--End bottom -->


<!-- start: Footer -->
";
        // line 394
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 394) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 394)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 394))) {
            // line 395
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 401
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 401, $this->source), "html", null, true);
            echo ">
          ";
            // line 402
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 402)) {
                // line 403
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 403), 403, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 405
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 409
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 409, $this->source), "html", null, true);
            echo ">
          ";
            // line 410
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 410)) {
                // line 411
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 413
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 417
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 417, $this->source), "html", null, true);
            echo ">
          ";
            // line 418
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 418)) {
                // line 419
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 419), 419, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 421
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 427
        echo "<!--End Footer -->


<!-- Start Footer Menu -->
";
        // line 431
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 431)) {
            // line 432
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 436
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 436), 436, $this->source), "html", null, true);
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 443
        echo "<!-- End Footer Menu -->


";
        // line 446
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 447
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 453
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 454
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 454, $this->source), "html", null, true);
                echo "</p>        
        ";
            }
            // line 456
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 460
            if (($context["show_credit_link"] ?? null)) {
                // line 461
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 465
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 471
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/business_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  815 => 471,  807 => 465,  801 => 461,  799 => 460,  793 => 456,  788 => 454,  784 => 453,  776 => 447,  774 => 446,  769 => 443,  759 => 436,  753 => 432,  751 => 431,  745 => 427,  737 => 421,  731 => 419,  729 => 418,  725 => 417,  719 => 413,  713 => 411,  711 => 410,  707 => 409,  701 => 405,  695 => 403,  693 => 402,  689 => 401,  681 => 395,  679 => 394,  673 => 390,  665 => 384,  659 => 382,  657 => 381,  653 => 380,  647 => 376,  641 => 374,  639 => 373,  635 => 372,  629 => 368,  623 => 366,  621 => 365,  617 => 364,  609 => 358,  607 => 357,  600 => 352,  590 => 344,  584 => 342,  579 => 341,  577 => 340,  571 => 336,  565 => 334,  560 => 333,  558 => 332,  552 => 328,  546 => 326,  541 => 325,  539 => 324,  533 => 320,  527 => 318,  522 => 317,  520 => 316,  512 => 310,  510 => 309,  500 => 301,  494 => 298,  491 => 297,  489 => 296,  481 => 290,  474 => 286,  470 => 285,  467 => 284,  465 => 283,  460 => 280,  453 => 276,  449 => 275,  446 => 274,  444 => 273,  439 => 270,  432 => 266,  428 => 265,  425 => 264,  423 => 263,  415 => 258,  409 => 254,  403 => 251,  400 => 250,  398 => 249,  387 => 240,  379 => 235,  373 => 231,  371 => 230,  365 => 226,  357 => 220,  351 => 218,  349 => 217,  345 => 216,  340 => 213,  334 => 211,  332 => 210,  328 => 209,  323 => 206,  317 => 204,  315 => 203,  311 => 202,  303 => 196,  301 => 195,  295 => 191,  286 => 184,  280 => 182,  278 => 181,  274 => 180,  269 => 177,  263 => 175,  261 => 174,  257 => 173,  252 => 170,  246 => 168,  244 => 167,  240 => 166,  232 => 160,  230 => 159,  226 => 158,  220 => 154,  212 => 149,  207 => 146,  205 => 145,  200 => 142,  194 => 138,  185 => 136,  181 => 135,  176 => 132,  174 => 131,  166 => 125,  160 => 123,  158 => 122,  143 => 109,  138 => 106,  134 => 104,  128 => 102,  125 => 101,  119 => 99,  116 => 98,  110 => 96,  107 => 95,  101 => 93,  98 => 92,  92 => 90,  90 => 89,  87 => 88,  85 => 87,  82 => 86,  76 => 84,  74 => 83,  70 => 81,  68 => 80,  64 => 78,  50 => 68,  48 => 67,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/business_responsive_theme/templates/layout/page.html.twig", "C:\\OpenServer\\domains\\DrupalTest\\web\\themes\\business_responsive_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 67, "for" => 135);
        static $filters = array("escape" => 68, "raw" => 136);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw'],
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
