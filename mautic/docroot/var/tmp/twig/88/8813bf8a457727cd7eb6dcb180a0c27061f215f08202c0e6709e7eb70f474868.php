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

/* @bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php */
class __TwigTemplate_ed2accf961c7637723a0e4fc91fbfe95a61b77c6d8df88f4a1501d94cfd1908a extends Template
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

namespace Mautic\\AssetBundle\\Tests\\Controller;

use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

class AssetDetailFunctionalTest extends MauticMysqlTestCase
{
    public function testLeadViewPreventsXSS(): void
    {
        \$title      = 'aaa\" onerror=alert(1) a=\"';
        \$asset      = new Asset();
        \$asset->setTitle(\$title);
        \$asset->setAlias('dummy-alias');
        \$asset->setStorageLocation('local');
        \$asset->setPath('broken-image.jpg');
        \$asset->setExtension('jpg');
        \$this->em->persist(\$asset);
        \$this->em->flush();
        \$this->em->clear();

        \$crawler   = \$this->client->request('GET', sprintf('/s/assets/view/%d', \$asset->getId()));
        \$imageTag  = \$crawler->filter('.tab-content.preview-detail img');

        \$onError  = \$imageTag->attr('onerror');
        \$altProp  = \$imageTag->attr('alt');

        Assert::assertNull(\$onError);
        Assert::assertSame(\$title, \$altProp);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Tests/Controller/AssetDetailFunctionalTest.php");
    }
}
