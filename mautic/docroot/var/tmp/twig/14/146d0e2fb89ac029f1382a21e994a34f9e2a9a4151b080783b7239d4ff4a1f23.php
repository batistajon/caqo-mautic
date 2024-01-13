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

/* @bundles/DynamicContentBundle/Tests/Helper/DynamicContentHelperTest.php */
class __TwigTemplate_3fd8857d42042a09fb7dca671e795ff393d735a7c8b559c1ea7ec7226a26eeb3 extends Template
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

namespace Mautic\\DynamicContentBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\DynamicContentBundle\\DynamicContentEvents;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;
use Mautic\\DynamicContentBundle\\Event\\ContactFiltersEvaluateEvent;
use Mautic\\DynamicContentBundle\\Helper\\DynamicContentHelper;
use Mautic\\DynamicContentBundle\\Model\\DynamicContentModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class DynamicContentHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject&DynamicContentModel
     */
    private \$mockModel;

    /**
     * @var MockObject&RealTimeExecutioner
     */
    private \$realTimeExecutioner;

    /**
     * @var MockObject&EventDispatcher
     */
    private \$mockDispatcher;

    /**
     * @var MockObject&LeadModel
     */
    private \$leadModel;

    /**
     * @var DynamicContentHelper
     */
    private \$helper;

    protected function setUp(): void
    {
        \$this->mockModel           = \$this->createMock(DynamicContentModel::class);
        \$this->realTimeExecutioner = \$this->createMock(RealTimeExecutioner::class);
        \$this->mockDispatcher      = \$this->createMock(EventDispatcher::class);
        \$this->leadModel           = \$this->createMock(LeadModel::class);
        \$this->helper              = new DynamicContentHelper(
            \$this->mockModel,
            \$this->realTimeExecutioner,
            \$this->mockDispatcher,
            \$this->leadModel
        );
    }

    public function testGetDwcBySlotNameWithPublished(): void
    {
        \$this->mockModel->expects(\$this->exactly(2))
            ->method('getEntities')
            ->withConsecutive(
                [
                    [
                        'filter' => [
                            'where' => [
                                [
                                    'col'  => 'e.slotName',
                                    'expr' => 'eq',
                                    'val'  => 'test',
                                ],
                                [
                                    'col'  => 'e.isPublished',
                                    'expr' => 'eq',
                                    'val'  => 1,
                                ],
                            ],
                        ],
                        'ignore_paginator' => true,
                    ],
                ],
                [
                    [
                        'filter' => [
                            'where' => [
                                [
                                    'col'  => 'e.slotName',
                                    'expr' => 'eq',
                                    'val'  => 'secondtest',
                                ],
                            ],
                        ],
                        'ignore_paginator' => true,
                    ],
                ]
            )
            ->willReturnOnConsecutiveCalls(true, false);

        // Only get published
        \$this->assertTrue(\$this->helper->getDwcsBySlotName('test', true));

        // Get all
        \$this->assertFalse(\$this->helper->getDwcsBySlotName('secondtest'));
    }

    public function testGetDynamicContentSlotForLeadWithListenerFindingMatch(): void
    {
        \$slotName = 'test';
        \$contact  = new Lead();
        \$contact->setFields(['email' => 'ma@ka.t', 'id' => 123]);

        \$slot = new DynamicContent();
        \$slot->setName(\$slotName);
        \$slot->setIsCampaignBased(false);
        // Setting filter that is not known to Mautic, but is for a plugin.
        \$slot->setFilters([['field' => 'unicorn', 'type' => 'text', 'operator' => '=', 'filter' => 'magic']]);
        \$slot->setContent('<p>test</p>');

        \$this->mockModel->method('getEntities')
            ->willReturn([\$slot]);

        \$this->mockModel->method('getTranslatedEntity')
            ->willReturn([\$slot, \$slot]);

        \$this->leadModel->method('getEntity')
            ->with(123)
            ->willReturn(\$contact);

        \$this->mockDispatcher->method('hasListeners')->willReturn(true);
        \$this->mockDispatcher->expects(\$this->exactly(2))
            ->method('dispatch')
            ->withConsecutive(
                [
                    DynamicContentEvents::ON_CONTACTS_FILTER_EVALUATE,
                    \$this->callback(
                        function (ContactFiltersEvaluateEvent \$event) use (\$contact, \$slot) {
                            \$this->assertSame(\$contact, \$event->getContact());
                            \$this->assertSame(\$slot->getFilters(), \$event->getFilters());

                            \$event->setIsEvaluated(true);
                            \$event->setIsMatched(true); // Match found in a subscriber.

                            return true;
                        }
                    ),
                    ],
                [
                    DynamicContentEvents::TOKEN_REPLACEMENT,
                    \$this->callback(
                        function (TokenReplacementEvent \$event) use (\$contact, \$slot) {
                            \$this->assertSame(\$contact, \$event->getLead());
                            \$this->assertSame(\$slot->getContent(), \$event->getContent());

                            return true;
                        }
                    ),
                ]
            );

        Assert::assertSame(
            '<p>test</p>',
            \$this->helper->getDynamicContentSlotForLead(\$slotName, \$contact)
        );
    }

    public function testGetDynamicContentSlotForLeadWithListenerNotFindingMatch(): void
    {
        \$slotName = 'test';
        \$contact  = new Lead();
        \$contact->setFields(['email' => 'ma@ka.t', 'id' => 123]);

        \$slot = new DynamicContent();
        \$slot->setName(\$slotName);
        \$slot->setIsCampaignBased(false);
        // Setting filter that is not known to Mautic, nor any plugin.
        \$slot->setFilters([['field' => 'unicorn', 'type' => 'text', 'operator' => '=', 'filter' => 'magic']]);
        \$slot->setContent('<p>test</p>');

        \$this->mockModel->method('getEntities')
            ->willReturn([\$slot]);

        \$this->mockModel->method('getTranslatedEntity')
            ->willReturn([\$slot, \$slot]);

        \$this->leadModel->method('getEntity')
            ->with(123)
            ->willReturn(\$contact);

        \$this->mockDispatcher->method('hasListeners')->willReturn(true);
        \$this->mockDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->withConsecutive(
                [
                    DynamicContentEvents::ON_CONTACTS_FILTER_EVALUATE,
                    \$this->callback(
                        function (ContactFiltersEvaluateEvent \$event) use (\$contact, \$slot) {
                            \$this->assertSame(\$contact, \$event->getContact());
                            \$this->assertSame(\$slot->getFilters(), \$event->getFilters());

                            // Match not found in any subscriber.

                            return true;
                        }
                    ),
                ]
            );

        Assert::assertSame(
            '', // No content returned as the filter did not match anything.
            \$this->helper->getDynamicContentSlotForLead(\$slotName, \$contact)
        );
    }

    public function testGetDynamicContentSlotForLeadWithNoListenerWithMatchingFilter(): void
    {
        \$slotName = 'test';
        \$contact  = new Lead();
        \$contact->setFields(['email' => 'ma@ka.t', 'id' => 123]);

        \$slot = new DynamicContent();
        \$slot->setName(\$slotName);
        \$slot->setIsCampaignBased(false);
        \$slot->setFilters([['field' => 'email', 'type' => 'email', 'operator' => '=', 'filter' => 'ma@ka.t']]);
        \$slot->setContent('<p>test</p>');

        \$this->mockModel->method('getEntities')
            ->willReturn([\$slot]);

        \$this->mockModel->method('getTranslatedEntity')
            ->willReturn([\$slot, \$slot]);

        \$this->leadModel->method('getEntity')
            ->with(123)
            ->willReturn(\$contact);

        \$this->mockDispatcher->method('hasListeners')->willReturn(false);
        \$this->mockDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->withConsecutive(
                [
                    DynamicContentEvents::TOKEN_REPLACEMENT,
                    \$this->callback(
                        function (TokenReplacementEvent \$event) use (\$contact, \$slot) {
                            \$this->assertSame(\$contact, \$event->getLead());
                            \$this->assertSame(\$slot->getContent(), \$event->getContent());

                            return true;
                        }
                    ),
                ]
            );

        Assert::assertSame(
            '<p>test</p>',
            \$this->helper->getDynamicContentSlotForLead(\$slotName, \$contact)
        );
    }

    public function testGetDynamicContentSlotForLeadWithNoListenerWithNotMatchingFilter(): void
    {
        \$slotName = 'test';
        \$contact  = new Lead();
        \$contact->setFields(['email' => 'ma@ka.t', 'id' => 123]);

        \$slot = new DynamicContent();
        \$slot->setName(\$slotName);
        \$slot->setIsCampaignBased(false);
        \$slot->setFilters([['field' => 'email', 'type' => 'email', 'operator' => '=', 'filter' => 'uni@co.rn']]);
        \$slot->setContent('<p>test</p>');

        \$this->mockModel->method('getEntities')
            ->willReturn([\$slot]);

        \$this->mockModel->method('getTranslatedEntity')
            ->willReturn([\$slot, \$slot]);

        \$this->leadModel->method('getEntity')
            ->with(123)
            ->willReturn(\$contact);

        \$this->mockDispatcher->method('hasListeners')->willReturn(false);
        \$this->mockDispatcher->expects(\$this->never())->method('dispatch');

        Assert::assertSame(
            '',
            \$this->helper->getDynamicContentSlotForLead(\$slotName, \$contact)
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Tests/Helper/DynamicContentHelperTest.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Tests/Helper/DynamicContentHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Tests/Helper/DynamicContentHelperTest.php");
    }
}
