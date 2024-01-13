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

/* @bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php */
class __TwigTemplate_8c47273a02c18afd0b3d6cae76c36ff783b57f5788b0607ec83ad3aeee52591e extends Template
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

namespace Mautic\\CampaignBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CampaignBundle\\Entity\\Campaign;

class CampaignData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager)
    {
        \$campaign = new Campaign();

        \$campaign->setName('Campaign A');
        \$campaign->setCanvasSettings([
            'nodes' => [
              0 => [
                'id'        => '148',
                'positionX' => '760',
                'positionY' => '155',
              ],
              1 => [
                'id'        => 'lists',
                'positionX' => '860',
                'positionY' => '50',
              ],
            ],
            'connections' => [
              0 => [
                'sourceId' => 'lists',
                'targetId' => '148',
                'anchors'  => [
                  'source' => 'leadsource',
                  'target' => 'top',
                ],
              ],
            ],
          ]
        );

        \$manager->persist(\$campaign);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php";
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
        return new Source("", "@bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php");
    }
}
