<?php

/* themes/newtheme/templates/page.html.twig */
class __TwigTemplate_7b448c45b1440487d605ab261b1b2eee40f462dcda95b3e04bcab75fe3be1e71 extends Twig_Template
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
        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page-wrapper\">
  <header role=\"banner\" id=\"header\" class=\"container\">
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  </header>
   <section id=\"main\" class=\"container\">
      <div class=\"main-content\">
          <div class=\"row\">
                <div id=\"content\" class=\"col-md-9 col-sm-9 col-xs-12\">
                    ";
        // line 9
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
            // line 10
            echo "                      <div id=\"topwidget_first\">
                        ";
            // line 11
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                // line 12
                echo "                          <div class=\"home-high-1 col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                echo "</div>
                        ";
            }
            // line 14
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                // line 15
                echo "                          <div class=\"topwidget_second col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                echo "</div>
                        ";
            }
            // line 17
            echo "                        ";
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                // line 18
                echo "                          <div class=\"topwidget_third col-md-4\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                echo "</div>
                        ";
            }
            // line 20
            echo "                      ";
        }
        // line 21
        echo "                    </div>
                    ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                </div>
                ";
        // line 24
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", array())) {
            // line 25
            echo "                  <aside id=\"sidebar\" class=\"sidebar col-md-3 col-sm-3 col-xs-12\">
                       ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar", array()), "html", null, true));
            echo "
                  </aside>
                ";
        }
        // line 29
        echo "          </div>
      </div>
    </section>
    <footer id=\"footer\" class=\"container-fluid\">
      <div class=\"container\">
        ";
        // line 34
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 35
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 36
                echo "              <div class=\"footer-area col-md-4 col-sm-4 col-xs-12\">
                ";
                // line 37
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 40
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 41
                echo "              <div class=\"footer-area col-md-4 col-sm-4 col-xs-12\">
                ";
                // line 42
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 45
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 46
                echo "              <div class=\"footer-area col-md-4 col-sm-4 col-xs-12\">
                ";
                // line 47
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 50
            echo "          </div>
        ";
        }
        // line 52
        echo "      </div>
      <div class=\"copyright\">
          <div class=\"container\">
              ";
        // line 55
        if ($this->getAttribute(($context["page"] ?? null), "copyright", array())) {
            // line 56
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "copyright", array()), "html", null, true));
            echo "
              ";
        }
        // line 58
        echo "          </div>
      </div>
    </footer>
 
</div>";
    }

    public function getTemplateName()
    {
        return "themes/newtheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  165 => 56,  163 => 55,  158 => 52,  154 => 50,  148 => 47,  145 => 46,  142 => 45,  136 => 42,  133 => 41,  130 => 40,  124 => 37,  121 => 36,  118 => 35,  116 => 34,  109 => 29,  103 => 26,  100 => 25,  98 => 24,  93 => 22,  90 => 21,  87 => 20,  81 => 18,  78 => 17,  72 => 15,  69 => 14,  63 => 12,  61 => 11,  58 => 10,  56 => 9,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/newtheme/templates/page.html.twig", "/opt/lampp/htdocs/drupal/themes/newtheme/templates/page.html.twig");
    }
}
