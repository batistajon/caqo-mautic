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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php */
class __TwigTemplate_5a46cbf92cd5ade7b2362207284a980faa2501388f173d43dfe1101dc9f3d04a extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

class CheckPhpVersion extends AbstractPreUpdateCheck
{
    public function runCheck(): PreUpdateCheckResult
    {
        \$metadata = \$this->getUpdateCandidateMetadata();

        if (
            version_compare(PHP_VERSION, \$metadata->getMinSupportedPHPVersion(), 'lt') ||
            version_compare(PHP_VERSION, \$metadata->getMaxSupportedPHPVersion(), 'gt')
        ) {
            return new PreUpdateCheckResult(false, \$this, [
                new PreUpdateCheckError('mautic.core.update.check.phpversion', [
                    '%currentversion%' => PHP_VERSION,
                    '%lowestversion%'  => \$metadata->getMinSupportedPHPVersion(),
                    '%highestversion%' => \$metadata->getMaxSupportedPHPVersion(),
                ]),
            ]);
        }

        return new PreUpdateCheckResult(true, \$this);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckPhpVersion.php");
    }
}
