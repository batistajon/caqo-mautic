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

/* @bundles/AssetBundle/Tests/Controller/AssetControllerFunctionalTest.php */
class __TwigTemplate_c867b0affce0fc5a7d1d9f870302dd6959c21f7526b2c97ba258f3a9ca9c62bb extends Template
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
use Mautic\\CoreBundle\\Tests\\Traits\\ControllerTrait;

class AssetControllerFunctionalTest extends MauticMysqlTestCase
{
    use ControllerTrait;

    /**
     * Index action should return status code 200.
     */
    public function testIndexAction(): void
    {
        \$asset = new Asset();
        \$asset->setTitle('test');
        \$asset->setAlias('test');
        \$asset->setDateAdded(new \\DateTime('2020-02-07 20:29:02'));
        \$asset->setDateModified(new \\DateTime('2020-03-21 20:29:02'));
        \$asset->setCreatedByUser('Test User');

        \$this->em->persist(\$asset);
        \$this->em->flush();
        \$this->em->clear();

        \$urlAlias   = 'assets';
        \$routeAlias = 'asset';
        \$column     = 'dateModified';
        \$column2    = 'title';
        \$tableAlias = 'a.';

        \$this->getControllerColumnTests(\$urlAlias, \$routeAlias, \$column, \$tableAlias, \$column2);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Tests/Controller/AssetControllerFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/AssetControllerFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Tests/Controller/AssetControllerFunctionalTest.php");
    }
}
