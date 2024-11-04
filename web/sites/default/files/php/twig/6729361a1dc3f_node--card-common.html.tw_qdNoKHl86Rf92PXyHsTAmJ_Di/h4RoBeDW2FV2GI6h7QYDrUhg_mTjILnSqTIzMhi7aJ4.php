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

/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig */
class __TwigTemplate_e4c8c052eca430cdf1d22c87907b5ec9 extends Template
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
        // line 64
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "bundle", [], "any", false, false, true, 66), 66, $this->source))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 67)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 68)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 69)) ? ("node--unpublished") : ("")), ((        // line 70
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 70, $this->source)))) : (""))];
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("umami/classy.node"), "html", null, true);
        yield "

";
        // line 75
        $context["read_more"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 76
            yield t("View @node.type.entity.label", array("@node.type.entity.label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "type", [], "any", false, false, true, 76), "entity", [], "any", false, false, true, 76), "label", [], "method", false, false, true, 76), ));
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 78
        yield "
";
        // line 79
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 79, "475570166")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 80
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 80), "content" =>         // line 81
($context["content"] ?? null), "content_attributes" =>         // line 82
($context["content_attributes"] ?? null), "label" =>         // line 83
($context["label"] ?? null), "title_attributes" =>         // line 84
($context["title_attributes"] ?? null), "title_prefix" =>         // line 85
($context["title_prefix"] ?? null), "title_suffix" =>         // line 86
($context["title_suffix"] ?? null), "read_more" =>         // line 87
($context["read_more"] ?? null), "url" =>         // line 88
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content", "content_attributes", "label", "title_attributes", "title_prefix", "title_suffix", "url"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig";
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
        return array (  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  58 => 78,  54 => 76,  52 => 75,  47 => 73,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 64, "trans" => 76, "embed" => 79);
        static $filters = array("clean_class" => 66, "escape" => 73);
        static $functions = array("attach_library" => 73);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'embed'],
                ['clean_class', 'escape'],
                ['attach_library'],
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


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig */
class __TwigTemplate_e4c8c052eca430cdf1d22c87907b5ec9___475570166 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 79
        return "umami:card";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:card", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 79);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_attributes", "label", "content", "title_prefix", "title_suffix", "read_more", "url", "content_attributes"]);    }

    // line 90
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 91, "1712172072")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 92
($context["title_attributes"] ?? null), "addClass", ["umami-card__title"], "method", false, false, true, 92), "label" => ((        // line 93
($context["label"] ?? null)) ? (($context["label"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 93))), "title_prefix" =>         // line 94
($context["title_prefix"] ?? null), "title_suffix" =>         // line 95
($context["title_suffix"] ?? null)]));
        // line 104
        yield "    ";
        yield from         $this->loadTemplate("core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 104, "1328922673")->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["umami-card__read-more"]]), "read_more" =>         // line 106
($context["read_more"] ?? null), "label" =>         // line 107
($context["label"] ?? null), "url" =>         // line 108
($context["url"] ?? null)]));
        // line 117
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["umami-card__content"], "method", false, false, true, 117), 117, $this->source), "html", null, true);
        yield ">
      ";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 118, $this->source), "html", null, true);
        yield "
    </div>
  ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig";
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
        return array (  191 => 118,  186 => 117,  184 => 108,  183 => 107,  182 => 106,  180 => 104,  178 => 95,  177 => 94,  176 => 93,  175 => 92,  173 => 91,  169 => 90,  157 => 79,  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  58 => 78,  54 => 76,  52 => 75,  47 => 73,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 91);
        static $filters = array("escape" => 117);
        static $functions = array("create_attribute" => 105);

        try {
            $this->sandbox->checkSecurity(
                ['embed'],
                ['escape'],
                ['create_attribute'],
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


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig */
class __TwigTemplate_e4c8c052eca430cdf1d22c87907b5ec9___1712172072 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title_prefix' => [$this, 'block_title_prefix'],
            'title_suffix' => [$this, 'block_title_suffix'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 91
        return "umami:title";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:title", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 91);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix"]);    }

    // line 97
    public function block_title_prefix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 98, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 100
    public function block_title_suffix($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 101, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig";
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
        return array (  309 => 101,  305 => 100,  297 => 98,  293 => 97,  281 => 91,  191 => 118,  186 => 117,  184 => 108,  183 => 107,  182 => 106,  180 => 104,  178 => 95,  177 => 94,  176 => 93,  175 => 92,  173 => 91,  169 => 90,  157 => 79,  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  58 => 78,  54 => 76,  52 => 75,  47 => 73,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 98);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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


/* core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig */
class __TwigTemplate_e4c8c052eca430cdf1d22c87907b5ec9___1328922673 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'a11y' => [$this, 'block_a11y'],
            'text' => [$this, 'block_text'],
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 104
        return "umami:read-more";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("umami:read-more", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", 104);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label", "read_more"]);    }

    // line 110
    public function block_a11y($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 111, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    // line 113
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 114
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["read_more"] ?? null), 114, $this->source), "html", null, true);
        yield "
      ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig";
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
        return array (  427 => 114,  423 => 113,  415 => 111,  411 => 110,  399 => 104,  309 => 101,  305 => 100,  297 => 98,  293 => 97,  281 => 91,  191 => 118,  186 => 117,  184 => 108,  183 => 107,  182 => 106,  180 => 104,  178 => 95,  177 => 94,  176 => 93,  175 => 92,  173 => 91,  169 => 90,  157 => 79,  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  58 => 78,  54 => 76,  52 => 75,  47 => 73,  45 => 70,  44 => 69,  43 => 68,  42 => 67,  41 => 66,  40 => 64,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/content/node--card-common.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 111);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
