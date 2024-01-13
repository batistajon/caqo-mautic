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

/* @bundles/CoreBundle/Templating/Helper/SlotsHelper.php */
class __TwigTemplate_7439e7e78b32e2ab91037b82ffe65b237b56cc124a33fdecf91da120b9b111a5 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Symfony\\Component\\Templating\\Helper\\SlotsHelper as BaseSlotsHelper;

/**
 * Class SlotsHelper.
 */
class SlotsHelper extends BaseSlotsHelper
{
    /**
     * @var bool
     */
    protected \$inBuilder = false;

    /**
     * Appends a slot value if already set.
     *
     * @param \$name
     * @param \$content
     */
    public function append(\$name, \$content)
    {
        if (isset(\$this->slots[\$name])) {
            if (is_array(\$this->slots[\$name])) {
                \$this->slots[\$name][] = \$content;
            } else {
                \$this->slots[\$name] .= ' '.\$content;
            }
        } else {
            \$this->slots[\$name] = \$content;
        }
    }

    /**
     * Checks if the slot has some content when a page is viewed in public.
     *
     * @param string|array \$names
     */
    public function hasContent(\$names)
    {
        // If we're in the builder, return true so all slots show.
        if (\$this->inBuilder) {
            return true;
        }

        if (is_string(\$names)) {
            \$names = [\$names];
        }

        if (is_array(\$names)) {
            foreach (\$names as \$n) {
                // strip tags used to ensure we don't have empty tags.
                // Caused a bug with hasContent returning incorrectly. Whitelisted img to fix
                \$hasContent = (bool) strip_tags(trim(\$this->slots[\$n]), '<img><iframe>');
                if (\$hasContent) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * @param bool \$bool
     */
    public function inBuilder(\$bool)
    {
        \$this->inBuilder = (bool) \$bool;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/SlotsHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Templating/Helper/SlotsHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/SlotsHelper.php");
    }
}
