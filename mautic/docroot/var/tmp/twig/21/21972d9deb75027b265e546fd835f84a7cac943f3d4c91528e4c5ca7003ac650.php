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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Request/RequestDAO.php */
class __TwigTemplate_232f204b00ae49719dd38a29ea4e1a91ae4d260ca6297401c9a484f2f1ce2e3b extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;

class RequestDAO
{
    /**
     * @var int
     */
    private \$syncIteration;

    /**
     * @var InputOptionsDAO
     */
    private \$inputOptionsDAO;

    /**
     * @var string
     */
    private \$syncToIntegration;

    /**
     * @var ObjectDAO[]
     */
    private \$objects = [];

    public function __construct(string \$syncToIntegration, int \$syncIteration, InputOptionsDAO \$inputOptionsDAO)
    {
        \$this->syncIteration     = (int) \$syncIteration;
        \$this->inputOptionsDAO   = \$inputOptionsDAO;
        \$this->syncToIntegration = \$syncToIntegration;
    }

    /**
     * @return self
     */
    public function addObject(ObjectDAO \$objectDAO)
    {
        \$this->objects[] = \$objectDAO;

        return \$this;
    }

    /**
     * @return ObjectDAO[]
     */
    public function getObjects(): array
    {
        return \$this->objects;
    }

    public function getSyncIteration(): int
    {
        return \$this->syncIteration;
    }

    public function isFirstTimeSync(): bool
    {
        return \$this->inputOptionsDAO->isFirstTimeSync();
    }

    /**
     * The integration that will be synced to.
     */
    public function getSyncToIntegration(): string
    {
        return \$this->syncToIntegration;
    }

    /**
     * Returns DAO object with all input options.
     */
    public function getInputOptionsDAO(): InputOptionsDAO
    {
        return \$this->inputOptionsDAO;
    }

    /**
     * Returns true if there are objects to sync.
     *
     * @return bool
     */
    public function shouldSync()
    {
        return !empty(\$this->objects);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/RequestDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/RequestDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Request/RequestDAO.php");
    }
}
