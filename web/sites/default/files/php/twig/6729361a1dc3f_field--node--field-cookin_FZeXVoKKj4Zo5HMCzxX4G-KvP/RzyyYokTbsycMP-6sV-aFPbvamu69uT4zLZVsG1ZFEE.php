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

/* core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig */
class __TwigTemplate_7cad385bc577f4113a64579d182af549 extends Template
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
        // line 41
        $context["classes"] = ["field", ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null), 43, $this->source))), ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null), 44, $this->source))), ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null), 45, $this->source)), (((        // line 46
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : (""))];
        // line 49
        yield "
";
        // line 50
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", 50, "1560118999")->unwrap()->yield(CoreExtension::toArray(["icon" => "timer", "label" =>         // line 52
($context["label"] ?? null), "items" =>         // line 53
($context["items"] ?? null), "attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_name", "field_type", "label_display", "label", "items", "attributes"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig";
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
        return array (  52 => 54,  51 => 53,  50 => 52,  49 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 43,  40 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "embed" => 50);
        static $filters = array("clean_class" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig */
class __TwigTemplate_7cad385bc577f4113a64579d182af549___1560118999 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 50
        return "umami:badge";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:badge", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", 50);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "items"]);    }

    // line 56
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 57, $this->source), "html", null, true);
        yield "
  ";
        return; yield '';
    }

    // line 59
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "addClass", ["umami-badge__item"], "method", false, false, true, 61), 61, $this->source), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig";
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
        return array (  184 => 63,  173 => 61,  168 => 60,  164 => 59,  156 => 57,  152 => 56,  140 => 50,  52 => 54,  51 => 53,  50 => 52,  49 => 50,  46 => 49,  44 => 46,  43 => 45,  42 => 44,  41 => 43,  40 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/field/field--node--field-cooking-time--recipe--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 60);
        static $filters = array("escape" => 57);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
