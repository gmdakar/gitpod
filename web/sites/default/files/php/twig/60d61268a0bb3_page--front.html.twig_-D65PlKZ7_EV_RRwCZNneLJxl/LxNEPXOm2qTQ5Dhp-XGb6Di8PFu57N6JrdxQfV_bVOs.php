<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/anothertheme/templates/system/page--front.html.twig */
class __TwigTemplate_f12c047dd3d1d1805456a12bab48536f6971699fdfbdb6431915c642ad61fedc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 62, "escape" => 65, "t" => 74];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 206
        echo "
";
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar navbar-fixed-top", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        // line 97
        echo "
<div role=\"main\" class=\"main-container ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\"> 

  <div class=\"row one\">
    <div class=\"col-sm-6 sideleft\">
        <div class=\"pan\">
          <div class=\"ct\">
            <span>Bienvenue <span>au lodge</span></span>
            <div>Les berges du lac</div>
          </div>
        </div>
    </div>
    <div class=\"col-sm-6 sideright\">
      <div class=\"pan\">
        <div class=\"ct\">
            <span>au Sénégal</span>
            <div>Le pays de la téranga</div>
          </div> 
      </div>
    </div>
  </div>
       
    <div class=\"row two\">
        <div class=\"gct\">
          <div class=\"col-sm-4\">
            <div class=\"pan\">
                 
                 <div class=\"title\">La plage</div>
                 <div class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ut!</div>

            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"pan\">
                 
                 <div class=\"title\">Le soleil</div>
                 <div class=\"desc\">Lorem foirt ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ut!</div>

            </div>
          </div>

            <div class=\"col-sm-4\">
            <div class=\"pan\">
                 
                 <div class=\"title\">La mer</div>
                 <div class=\"desc\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, ut!</div>

            </div>
          </div>
   
      </div>
  </div>

   <div class=\"row three\">
        <div class=\"gct\">     

          <div class=\"col-md-15 col-xs-3\">
            <div class=\"pan\">
                 
                 <img src=\"/themes/custom/anothertheme/images/sub/img1.jpg\" alt=\"\">

            </div>
          </div>

          <div class=\"col-md-15 col-xs-3\">
            <div class=\"pan\">
                 
                 <img src=\"/themes/custom/anothertheme/images/sub/img2.jpg\" alt=\"\">

            </div>
          </div>

          <div class=\"col-md-15 col-xs-3\">
            <div class=\"pan\">
                 
                 <img src=\"/themes/custom/anothertheme/images/sub/img3.jpg\" alt=\"\">

            </div>
          </div>

          <div class=\"col-md-15 col-xs-3\">
            <div class=\"pan\">
                 
                 <img src=\"/themes/custom/anothertheme/images/sub/img4.jpg\" alt=\"\">

            </div>
          </div>

          <div class=\"col-md-15 col-xs-3\">
            <div class=\"pan\">
                 
                 <img src=\"/themes/custom/anothertheme/images/sub/img5.jpg\" alt=\"\">

            </div>
          </div>
         
   
      </div>
  </div>

   ";
        // line 197
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 198
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 203
            echo "  ";
        }
        echo "  
</div>
";
    }

    // line 198
    public function block_footer($context, array $blocks = [])
    {
        // line 199
        echo "      <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
        ";
        // line 200
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
      </footer>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/anothertheme/templates/system/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 200,  272 => 199,  269 => 198,  261 => 203,  258 => 198,  256 => 197,  154 => 98,  151 => 97,  148 => 96,  143 => 91,  139 => 89,  136 => 88,  130 => 85,  127 => 84,  124 => 83,  120 => 80,  111 => 74,  108 => 73,  105 => 72,  101 => 70,  98 => 69,  92 => 67,  90 => 66,  85 => 65,  83 => 62,  82 => 61,  81 => 59,  79 => 58,  76 => 57,  71 => 206,  69 => 96,  66 => 94,  62 => 57,  60 => 56,  58 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/anothertheme/templates/system/page--front.html.twig", "C:\\wamp64\\www\\gitpodd8\\web\\themes\\custom\\anothertheme\\templates\\system\\page--front.html.twig");
    }
}
