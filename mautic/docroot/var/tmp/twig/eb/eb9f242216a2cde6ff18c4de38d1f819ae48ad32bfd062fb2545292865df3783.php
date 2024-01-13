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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/ObjectIdsDAOTest.php */
class __TwigTemplate_01ecd5edf06a58f97f75d39f69d59eb836515c43278107ffaaa3fb2e6ed0b181 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\ObjectIdsDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use PHPUnit\\Framework\\TestCase;

class ObjectIdsDAOTest extends TestCase
{
    public function testWorkflow(): void
    {
        \$objectIdsDAO = ObjectIdsDAO::createFromCliOptions(
            [
                'contact:123',
                'contact:124',
                'company:12',
                'company:13',
                'Lead:sowiern',
                'Lead:sowie4n',
            ]
        );

        \$objectIdsDAO->addObjectId('company', '234');

        \$this->assertSame(['123', '124'], \$objectIdsDAO->getObjectIdsFor('contact'));
        \$this->assertSame(['12', '13', '234'], \$objectIdsDAO->getObjectIdsFor('company'));
        \$this->assertSame(['sowiern', 'sowie4n'], \$objectIdsDAO->getObjectIdsFor('Lead'));

        \$this->expectException(ObjectNotFoundException::class);
        \$objectIdsDAO->getObjectIdsFor('Unicorn');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/ObjectIdsDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/ObjectIdsDAOTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/ObjectIdsDAOTest.php");
    }
}
