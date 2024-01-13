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

/* @bundles/CoreBundle/Event/IconEvent.php */
class __TwigTemplate_da5ed81dd6143a6e073887e62e0951ce71f0cf81506014d33f7e9ed8e42a3c52 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class IconEvent.
 */
class IconEvent extends Event
{
    /**
     * @var array
     */
    protected \$icons = [];

    /**
     * @var CorePermissions
     */
    protected \$security;

    public function __construct(CorePermissions \$security)
    {
        \$this->security = \$security;
    }

    /**
     * @return CorePermissions
     */
    public function getSecurity()
    {
        return \$this->security;
    }

    /**
     * @param string \$type
     * @param string \$icon
     */
    public function addIcon(\$type, \$icon)
    {
        \$this->icons[\$type] = \$icon;
    }

    /**
     * Return the icons.
     *
     * @return array
     */
    public function getIcons()
    {
        return \$this->icons;
    }

    public function setIcons(array \$icons)
    {
        \$this->icons = \$icons;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/IconEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/IconEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/IconEvent.php");
    }
}
