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

/* umami:badge */
class __TwigTemplate_6802b250cd3472cc69e79898cd74fc3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/components.umami--badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->addAdditionalContext($context, "umami:badge"));
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\ComponentsTwigExtension']->validateProps($context, "umami:badge"));
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["umami-badge"], "method", false, false, true, 1), 1, $this->source), "html", null, true);
        yield ">
  <div class=\"umami-badge__container\">
    ";
        // line 3
        if (($context["icon"] ?? null)) {
            // line 4
            yield "      <div class=\"umami-badge__icon\">
        ";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::source($this->env, ((($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["componentMetadata"] ?? null), "path", [], "any", false, false, true, 5), 5, $this->source) . "/icons/") . ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 5, $this->source), "knife")) : ("knife"))) . ".svg")));
            yield "
      </div>
    ";
        }
        // line 8
        yield "    ";
        if ((        $this->unwrap()->hasBlock("label", $context, $blocks) && Twig\Extension\CoreExtension::trim(        $this->unwrap()->renderBlock("label", $context, $blocks)))) {
            // line 9
            yield "      <div class=\"umami-badge__label\">";
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            yield "</div>
    ";
        }
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('text', $context, $blocks);
        // line 12
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "icon", "componentMetadata"]);        return; yield '';
    }

    // line 9
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 11
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "umami:badge";
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
        return array (  89 => 11,  82 => 9,  74 => 12,  71 => 11,  65 => 9,  62 => 8,  56 => 5,  53 => 4,  51 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "umami:badge", "core/profiles/demo_umami/themes/umami/components/badge/badge.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "block" => 9);
        static $filters = array("escape" => 1, "default" => 5, "trim" => 8);
        static $functions = array("source" => 5);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'default', 'trim'],
                ['source'],
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
