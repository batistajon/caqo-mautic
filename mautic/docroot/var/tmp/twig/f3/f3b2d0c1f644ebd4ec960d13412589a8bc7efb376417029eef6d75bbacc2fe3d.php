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

/* @bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php */
class __TwigTemplate_52470e724aef978cb6f1f1dd16155cb59d335ae8db9e4905ed84faa6c0304725 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\ConnectionBuilder;

class ConnectionBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testArrayIsBuiltAsItsUsedInJsPlumb()
    {
        \$eventsArray = [
            Event::TYPE_ACTION   => [
                'action1' => [
                    'connectionRestrictions' => [
                        'anchor' => ['decision1.inaction'],
                        'source' => [
                            'decision' => [
                                'decision1',
                            ],
                        ],
                    ],
                ],
                'action2' => [
                    // BC from way back
                    'associatedDecisions' => [
                        'decision1',
                    ],
                ],
                'action3' => [
                    // BC from way back
                    'anchorRestrictions' => [
                        'decision2.top',
                    ],
                ],
            ],
            Event::TYPE_DECISION => [
                'decision1' => [
                    'connectionRestrictions' => ['source' => ['action' => ['action1']]],
                ],
                'decision2' => [
                    // BC From way back
                    'associatedActions' => [
                        'some.decision',
                    ],
                ],
            ],
        ];

        \$results = ConnectionBuilder::buildRestrictionsArray(\$eventsArray);

        \$expected = [
            'anchor'    => [
                'decision1' => [
                    'action1' => ['inaction'],
                ],
                'action3'   => [
                    'decision2' => ['top'],
                ],
            ],
            'action1'   => [
                'source' => [
                    'action'   => [],
                    'decision' => ['decision1'],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'action2'   => [
                'source' => [
                    'action'   => [],
                    'decision' => ['decision1'],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'action3'   => [
                'source' => [
                    'action'   => [],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'decision1' => [
                'source' => [
                    'action'   => ['action1'],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'decision2' => [
                'source' => [
                    'action'   => [],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => ['some.decision'],
                    'decision' => [],
                ],
            ],
        ];

        \$this->assertEquals(\$expected, \$results);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php");
    }
}
