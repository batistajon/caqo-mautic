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

/* @bundles/CoreBundle/Doctrine/Provider/VersionProvider.php */
class __TwigTemplate_a600e5018eee6ff57ba32399155266adc6413629afbdf71fd4b8cb5c148b8d91 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Provider;

use Doctrine\\DBAL\\Connection;

final class VersionProvider implements VersionProviderInterface
{
    private Connection \$connection;

    /**
     * @var string
     */
    private \$version;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    public function getVersion(): string
    {
        if (null === \$this->version) {
            \$this->version = \$this->fetchVersionFromDb();
        }

        return \$this->version;
    }

    public function isMariaDb(): bool
    {
        return false !== strpos(\$this->getVersion(), 'MariaDB');
    }

    public function isMySql(): bool
    {
        return !\$this->isMariaDb();
    }

    private function fetchVersionFromDb(): string
    {
        return \$this->connection->executeQuery('SELECT VERSION()')->fetchColumn();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Provider/VersionProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Provider/VersionProvider.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Provider/VersionProvider.php");
    }
}
