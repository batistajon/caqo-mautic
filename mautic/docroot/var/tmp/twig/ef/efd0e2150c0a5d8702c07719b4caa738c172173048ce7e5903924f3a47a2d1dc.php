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

/* @bundles/PluginBundle/Tests/Integration/AbstractIntegrationTestCase.php */
class __TwigTemplate_ecef79b4be80942c30a8b72bf44a5b0fcc4c3f57d8549595ab23d38b5e70a8f2 extends Template
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

namespace Mautic\\PluginBundle\\Tests\\Integration;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PluginBundle\\Model\\IntegrationEntityModel;
use Monolog\\Logger;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Translation\\TranslatorInterface;

class AbstractIntegrationTestCase extends TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$dispatcher;

    /**
     * @var CacheStorageHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$cache;

    /**
     * @var EntityManager|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$em;

    /**
     * @var Session|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$session;

    /**
     * @var RequestStack|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$request;

    /**
     * @var Router|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$router;

    /**
     * @var TranslatorInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$translator;

    /**
     * @var Logger|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$logger;

    /**
     * @var EncryptionHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$encryptionHelper;

    /**
     * @var LeadModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$leadModel;

    /**
     * @var CompanyModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$companyModel;

    /**
     * @var PathsHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$pathsHelper;

    /**
     * @var NotificationModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$notificationModel;

    /**
     * @var FieldModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$fieldModel;

    /**
     * @var IntegrationEntityModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$integrationEntityModel;

    /**
     * @var DoNotContact|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    protected \$doNotContact;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher             = \$this->createMock(EventDispatcherInterface::class);
        \$this->cache                  = \$this->createMock(CacheStorageHelper::class);
        \$this->em                     = \$this->createMock(EntityManager::class);
        \$this->session                = \$this->createMock(Session::class);
        \$this->request                = \$this->createMock(RequestStack::class);
        \$this->router                 = \$this->createMock(Router::class);
        \$this->translator             = \$this->createMock(TranslatorInterface::class);
        \$this->logger                 = \$this->createMock(Logger::class);
        \$this->encryptionHelper       = \$this->createMock(EncryptionHelper::class);
        \$this->leadModel              = \$this->createMock(LeadModel::class);
        \$this->companyModel           = \$this->createMock(CompanyModel::class);
        \$this->pathsHelper            = \$this->createMock(PathsHelper::class);
        \$this->notificationModel      = \$this->createMock(NotificationModel::class);
        \$this->fieldModel             = \$this->createMock(FieldModel::class);
        \$this->integrationEntityModel = \$this->createMock(IntegrationEntityModel::class);
        \$this->doNotContact           = \$this->createMock(DoNotContact::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Tests/Integration/AbstractIntegrationTestCase.php";
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
        return new Source("", "@bundles/PluginBundle/Tests/Integration/AbstractIntegrationTestCase.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Tests/Integration/AbstractIntegrationTestCase.php");
    }
}
