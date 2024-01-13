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

/* @bundles/CoreBundle/Release/Metadata.php */
class __TwigTemplate_f6332a8c13f020f59dbc351959057aaf7f7d879d02477768ef003cb2184411a7 extends Template
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

namespace Mautic\\CoreBundle\\Release;

class Metadata implements \\JsonSerializable
{
    private string \$version;
    private int \$majorVersion;
    private int \$minorVersion;
    private int \$patchVersion;
    private string \$extraVersion;
    private string \$stability;
    private string \$minSupportedPHPVersion;
    private string \$maxSupportedPHPVersion;

    /**
     * We use this property to show a warning message on the dashboard
     * if the user has a PHP version that is lower than the given version.
     * Users are warned that their PHP version won't be supported by future
     * Mautic versions anymore.
     */
    private string \$showPHPVersionWarningIfUnder;

    private string \$minSupportedMauticVersion;
    private string \$announcementUrl;
    private string \$minSupportedMySqlVersion;
    private string \$minSupportedMariaDbVersion;

    public function __construct(array \$metadata)
    {
        \$this->version                      = \$metadata['version'];
        \$this->stability                    = \$metadata['stability'];
        \$this->minSupportedPHPVersion       = \$metadata['minimum_php_version'];
        \$this->maxSupportedPHPVersion       = \$metadata['maximum_php_version'];
        \$this->showPHPVersionWarningIfUnder = \$metadata['show_php_version_warning_if_under'] ?? '';
        \$this->minSupportedMauticVersion    = \$metadata['minimum_mautic_version'];
        \$this->announcementUrl              = \$metadata['announcement_url'];
        \$this->minSupportedMySqlVersion     = \$metadata['minimum_mysql_version'] ?? '';
        \$this->minSupportedMariaDbVersion   = \$metadata['minimum_mariadb_version'] ?? '';

        preg_match('#^(\\d+)\\.(\\d+)\\.(\\d+)[\\. \\-]?(.*+)?\$#', \$this->version, \$match);
        \$this->majorVersion = \$match[1];
        \$this->minorVersion = \$match[2];
        \$this->patchVersion = \$match[3];
        \$this->extraVersion = \$match[4] ?? '';
    }

    public function getVersion(): string
    {
        return \$this->version;
    }

    public function getMajorVersion(): int
    {
        return \$this->majorVersion;
    }

    public function getMinorVersion(): int
    {
        return \$this->minorVersion;
    }

    public function getPatchVersion(): int
    {
        return \$this->patchVersion;
    }

    public function getExtraVersion(): string
    {
        return \$this->extraVersion;
    }

    public function getStability(): string
    {
        return \$this->stability;
    }

    public function getMinSupportedPHPVersion(): string
    {
        return \$this->minSupportedPHPVersion;
    }

    public function getMaxSupportedPHPVersion(): string
    {
        return \$this->maxSupportedPHPVersion;
    }

    /**
     * We use this property to show a warning message on the dashboard
     * if the user has a PHP version that is lower than the given version.
     * Users are warned that their PHP version won't be supported by future
     * Mautic versions anymore.
     */
    public function getShowPHPVersionWarningIfUnder(): string
    {
        return \$this->showPHPVersionWarningIfUnder;
    }

    public function getMinSupportedMauticVersion(): string
    {
        return \$this->minSupportedMauticVersion;
    }

    public function getAnnouncementUrl(): string
    {
        return \$this->announcementUrl;
    }

    public function getMinSupportedMySqlVersion(): string
    {
        return \$this->minSupportedMySqlVersion;
    }

    public function getMinSupportedMariaDbVersion(): string
    {
        return \$this->minSupportedMariaDbVersion;
    }

    public function jsonSerialize()
    {
        return [
            'version'                           => \$this->version,
            'stability'                         => \$this->stability,
            'minimum_php_version'               => \$this->minSupportedPHPVersion,
            'maximum_php_version'               => \$this->maxSupportedPHPVersion,
            'show_php_version_warning_if_under' => \$this->showPHPVersionWarningIfUnder,
            'minimum_mautic_version'            => \$this->minSupportedMauticVersion,
            'announcement_url'                  => \$this->announcementUrl,
            'minimum_mysql_version'             => \$this->minSupportedMySqlVersion,
            'minimum_mariadb_version'           => \$this->minSupportedMariaDbVersion,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Release/Metadata.php";
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
        return new Source("", "@bundles/CoreBundle/Release/Metadata.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Release/Metadata.php");
    }
}
