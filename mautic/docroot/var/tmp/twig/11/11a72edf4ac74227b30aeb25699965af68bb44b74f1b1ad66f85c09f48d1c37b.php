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

/* @bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php */
class __TwigTemplate_ec88cee4846e0ac46fa75c13de85c38db88f31116c71f1f5109015e4757f3427 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Service;

use FM\\ElfinderBundle\\Connector\\ElFinderConnector;
use FM\\ElfinderBundle\\Loader\\ElFinderLoader;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\HttpFoundation\\Request;

class LocalFileAdapterServiceTest extends MauticMysqlTestCase
{
    /**
     * @var string
     */
    private \$folderName;

    protected function beforeTearDown(): void
    {
        \$pathsHelper = self::\$container->get('mautic.helper.paths');
        \$folderPath  = \"{\$pathsHelper->getImagePath()}/\$this->folderName\";

        if (is_dir(\$folderPath)) {
            rmdir(\$folderPath);
        }
    }

    public function testElfinderCreateFolderPermissions(): void
    {
        \$elFinderLoader = new class(self::\$container) extends ElFinderLoader {
            public function __construct(ContainerInterface \$container)
            {
                parent::__construct(\$container->get('fm_elfinder.configurator'));
            }

            /**
             * @return array<mixed>
             */
            public function load(Request \$request)
            {
                \$connector = new ElFinderConnector(\$this->bridge);

                return \$connector->execute(\$request->query->all());
            }
        };

        self::\$container->set('fm_elfinder.loader', \$elFinderLoader);

        \$this->folderName = (string) time();
        \$this->loginUser('admin');
        \$_SERVER['REQUEST_METHOD'] = Request::METHOD_POST;
        \$this->client->request(
            Request::METHOD_POST,
            \"efconnect?cmd=mkdir&name=\$this->folderName&target=fls1_Lw\"
        );
        \$response = \$this->client->getResponse();
        self::assertSame(200, \$response->getStatusCode());
        /** @var PathsHelper \$pathsHelper */
        \$pathsHelper = self::\$container->get('mautic.helper.paths');
        \$folderPath  = \"{\$pathsHelper->getImagePath()}/\$this->folderName\";
        self::assertDirectoryExists(\$folderPath);
        self::assertSame('777', substr(sprintf('%o', fileperms(\$folderPath)), -3));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Service/LocalFileAdapterServiceTest.php");
    }
}
