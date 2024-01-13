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

/* @bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php */
class __TwigTemplate_b0f1590cc2d12169773e091372a8be1f1dca4702fbdc413540c0415778708bef extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DeviceApiControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testPutEditWithInexistingIdSoItShouldCreate(): void
    {
        \$contact = new Lead();
        \$this->em->persist(\$contact);
        \$this->em->flush();

        \$this->client->request(Request::METHOD_PUT, '/api/devices/99999/edit', [
            'device'            => 'desktop',
            'deviceOsName'      => 'Ubuntu',
            'deviceOsShortName' => 'UBT',
            'deviceOsPlatform'  => 'x64',
            'lead'              => \$contact->getId(),
        ]);

        \$clientResponse = \$this->client->getResponse();

        Assert::assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php");
    }
}
