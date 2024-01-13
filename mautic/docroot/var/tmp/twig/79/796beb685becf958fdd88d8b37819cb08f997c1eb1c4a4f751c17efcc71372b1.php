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

/* @bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php */
class __TwigTemplate_7c09b2aad01b8ec54f62eb13fe47473f4ee88942385b7dc7efd7b98cde2788a5 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Connection;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Exception;

class ConnectionWrapper extends Connection
{
    /**
     * @throws Exception
     */
    public function initConnection(array \$dbParams): void
    {
        \$params = \$this->getParams();

        if (\$this->isConnected()) {
            \$this->close();
        }

        \$params['host']     = \$dbParams['host'];
        \$params['port']     = \$dbParams['port'];
        \$params['dbname']   = \$dbParams['name'];
        \$params['user']     = \$dbParams['user'];
        \$params['password'] = \$dbParams['password'];
        \$this->__construct(\$params, \$this->_driver, \$this->_config, \$this->_eventManager);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php");
    }
}
