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

/* @bundles/CoreBundle/Test/IsolatedTestTrait.php */
class __TwigTemplate_28a227e5ce112e388137660aef5d6e4839f98dbd95a992dfcd786515fcf7d131 extends Template
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

namespace Mautic\\CoreBundle\\Test;

trait IsolatedTestTrait
{
    /**
     * Ensure the MAUTIC_TABLE_PREFIX const is correctly set in isolated tests.
     *
     * Those test runs don't get the constant set in MauticExtension::executeBeforeFirstTest(), so we need to redefine it.
     */
    public static function setUpBeforeClass(): void
    {
        if (!defined('MAUTIC_TABLE_PREFIX')) {
            EnvLoader::load();
            \$prefix = false === getenv('MAUTIC_DB_PREFIX') ? 'test_' : getenv('MAUTIC_DB_PREFIX');
            define('MAUTIC_TABLE_PREFIX', \$prefix);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/IsolatedTestTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Test/IsolatedTestTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/IsolatedTestTrait.php");
    }
}
