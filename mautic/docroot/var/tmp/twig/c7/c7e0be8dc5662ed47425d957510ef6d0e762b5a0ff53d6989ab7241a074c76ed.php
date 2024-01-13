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

/* @bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php */
class __TwigTemplate_1bc1403eb243f78ab265f02294b1cd1806504e52bb85bbbd45a8a015302ebfe0 extends Template
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

namespace Mautic\\AssetBundle\\Tests\\DataFixtures;

use Mautic\\AssetBundle\\DataFixtures\\ORM\\LoadAssetData;
use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class LoadAssetDataTest extends MauticMysqlTestCase
{
    public function testLoadFixtures(): void
    {
        \$this->loadFixtures([LoadAssetData::class]);
        \$asset = \$this->em->getRepository(Asset::class)->findOneBy(
            ['title' => '@TOCHANGE: Asset1 Title'],
            ['id' => 'DESC']
        );
        self::assertInstanceOf(Asset::class, \$asset);
        self::assertEquals('asset1', \$asset->getAlias());
        self::assertEquals('@TOCHANGE: Asset1 Original File Name', \$asset->getOriginalFileName());
        self::assertEquals('fdb8e28357b02d12d068de3e5661832e21bc08ec.doc', \$asset->getPath());
        self::assertEquals(1, \$asset->getDownloadCount());
        self::assertEquals(1, \$asset->getUniqueDownloadCount());
        self::assertEquals(1, \$asset->getRevision());
        self::assertEquals('en', \$asset->getLanguage());
    }

    public function testLoadFixturesOrder(): void
    {
        \$loadAssetData = new LoadAssetData();
        self::assertEquals(10, \$loadAssetData->getOrder());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Tests/DataFixtures/LoadAssetDataTest.php");
    }
}
