<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig */
class __TwigTemplate_995772e867890f797d8b6d71fde6cd9d extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        $context["classes"] = ["layout", "layout--oneplusfourgrid-section"];
        // line 20
        if (($context["content"] ?? null)) {
            // line 21
            yield "  <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            yield ">

    ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 23)) {
                // line 24
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "first", [], "any", false, false, true, 24), "addClass", ["layout__region", "layout__region--first"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                yield ">
        ";
                // line 25
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "first", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 28
            yield "
    ";
            // line 29
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 29) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 29)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 29)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 29))) {
                // line 30
                yield "      <div class=\"layout__four-grid-group\">
    ";
            }
            // line 32
            yield "
      ";
            // line 33
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 33)) {
                // line 34
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "second", [], "any", false, false, true, 34), "addClass", ["layout__region", "layout__region--second"], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                yield ">
          ";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 38
            yield "
      ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 39)) {
                // line 40
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "third", [], "any", false, false, true, 40), "addClass", ["layout__region", "layout__region--third"], "method", false, false, true, 40), 40, $this->source), "html", null, true);
                yield ">
          ";
                // line 41
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 44
            yield "
      ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 45)) {
                // line 46
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fourth", [], "any", false, false, true, 46), "addClass", ["layout__region", "layout__region--fourth"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                yield ">
          ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 50
            yield "
      ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 51)) {
                // line 52
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "fifth", [], "any", false, false, true, 52), "addClass", ["layout__region", "layout__region--fifth"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                yield ">
          ";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 56
            yield "
    ";
            // line 57
            if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "second", [], "any", false, false, true, 57) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "third", [], "any", false, false, true, 57)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fourth", [], "any", false, false, true, 57)) || CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "fifth", [], "any", false, false, true, 57))) {
                // line 58
                yield "      </div>
    ";
            }
            // line 60
            yield "
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "attributes", "region_attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  145 => 60,  141 => 58,  139 => 57,  136 => 56,  130 => 53,  125 => 52,  123 => 51,  120 => 50,  114 => 47,  109 => 46,  107 => 45,  104 => 44,  98 => 41,  93 => 40,  91 => 39,  88 => 38,  82 => 35,  77 => 34,  75 => 33,  72 => 32,  68 => 30,  66 => 29,  63 => 28,  57 => 25,  52 => 24,  50 => 23,  44 => 21,  42 => 20,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/layouts/oneplusfourgrid_section/layout--oneplusfourgrid-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 20);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
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
