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

/* @bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php */
class __TwigTemplate_caf74c0bd9711523d5941d5670b8ff11956658e2840d7434e60ba968b09acacc extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;

class BuilderTokenHelperFactory
{
    private \$security;
    private \$modelFactory;
    private \$connection;
    private \$userHelper;

    public function __construct(
        CorePermissions \$security,
        ModelFactory \$modelFactory,
        Connection \$connection,
        UserHelper \$userHelper
    ) {
        \$this->security      = \$security;
        \$this->modelFactory  = \$modelFactory;
        \$this->connection    = \$connection;
        \$this->userHelper    = \$userHelper;
    }

    public function getBuilderTokenHelper(
        string \$modelName,
        ?string \$viewPermissionBase = null,
        ?string \$bundleName = null,
        ?string \$langVar = null
    ): BuilderTokenHelper {
        \$builderTokenHelper = new BuilderTokenHelper(\$this->security, \$this->modelFactory, \$this->connection, \$this->userHelper);
        \$builderTokenHelper->configure(\$modelName, \$viewPermissionBase, \$bundleName, \$langVar);

        return \$builderTokenHelper;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/BuilderTokenHelperFactory.php");
    }
}
