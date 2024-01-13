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

/* @bundles/MarketplaceBundle/Model/PackageModel.php */
class __TwigTemplate_0940d9f6df8af07f8d5e828288e50409c7e3b1905d6e8b190651f4174dcbeefe extends Template
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

namespace Mautic\\MarketplaceBundle\\Model;

use Mautic\\MarketplaceBundle\\Api\\Connection;
use Mautic\\MarketplaceBundle\\DTO\\PackageDetail;
use Mautic\\MarketplaceBundle\\Service\\Allowlist;

class PackageModel
{
    private Connection \$connection;
    private Allowlist \$allowlist;

    public function __construct(Connection \$connection, Allowlist \$allowlist)
    {
        \$this->connection = \$connection;
        \$this->allowlist  = \$allowlist;
    }

    public function getPackageDetail(string \$name): PackageDetail
    {
        \$allowlist      = \$this->allowlist->getAllowList();
        \$allowedPackage = \$allowlist->findPackageByName(\$name);
        \$payload        = \$this->connection->getPackage(\$name);

        return PackageDetail::fromArray(\$payload['package'] + \$allowedPackage->toArray());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Model/PackageModel.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Model/PackageModel.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Model/PackageModel.php");
    }
}
