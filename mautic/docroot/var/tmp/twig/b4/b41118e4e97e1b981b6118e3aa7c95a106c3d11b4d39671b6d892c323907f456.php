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

/* @bundles/CoreBundle/Templating/Twig/Extension/ContentExtension.php */
class __TwigTemplate_f9c0413d1e281467bf43d69c9c70824587ad222631917e5b259a05bc91dbf28b extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Templating\\Twig\\Extension;

use Mautic\\CoreBundle\\Templating\\Helper\\ContentHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ContentExtension extends AbstractExtension
{
    protected ContentHelper \$contentHelper;

    public function __construct(ContentHelper \$contentHelper)
    {
        \$this->contentHelper = \$contentHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('customContent', [\$this, 'getCustomContent'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Dispatch an event to collect custom content.
     *
     * @param ?mixed              \$context  Context of the content requested for the viewName
     * @param array<string,mixed> \$vars     Templating vars
     * @param ?string             \$viewName The main identifier for the content requested. Will be etracted from \$vars if get_defined
     */
    public function getCustomContent(\$context = null, array \$vars = [], ?string \$viewName = null): string
    {
        return \$this->contentHelper->getCustomContent(\$context, \$vars, \$viewName);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/ContentExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/ContentExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/ContentExtension.php");
    }
}
